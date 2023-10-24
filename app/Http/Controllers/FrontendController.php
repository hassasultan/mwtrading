<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Section;
use App\Models\Category;
use App\Models\WishList;
use App\Models\Banner;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class FrontendController extends Controller
{
    //
    public function index()
    {
        // dd(count(auth()->user()->wishlistCount->toArray()));
        $featured = Product::with('coupon')->whereHas('coupon',function($query){
            $query->where('expiry', '>=', Carbon::today());
        })->where('status',1)->where('IsFeature',1)->get();
        $product = Product::where('status',1)->get();
        // dd($product->toArray());
        $category = Category::where('status',1)->get();
        $section = Section::with('products','products.coupon')->whereHas('products',function($query){
            $query->where('status', 1);
        })->whereHas('products.coupon',function($query){
            $query->where('expiry', '>=', Carbon::today());
        })->where('status',1)->get();
        $banner = Banner::where('status',1)->get();

        // dd($section->toArray());
        return view('frontend.home',compact('product','section','featured','category','banner'));
    }
    public function details($slug)
    {
        $product = Product::with('images','coupon')->where('slug',$slug)->first();
        $related = Product::with('singleImage')->where('category_id',$product->category_id)->where('status',1)->get();
        $next = Product::with('images','coupon')->where('id','>',$product->id)->where('status',1)->first();
        $prev = Product::with('images','coupon')->where('id','<',$product->id)->where('status',1)->first();
        // dd($prev->toArray());
        return view('frontend.product-details',compact('product','related','prev','next'));
    }
    public function profile()
    {
        $user = auth()->user();
        return view('frontend.user.profile',compact('user'));
    }
    public function updatePassword(Request $request)
    {
        $valid =  Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        if(!$valid->fails())
        {
            try
            {
                $user = User::find(auth()->user()->id);
                $user->password = Hash::make($request->password);
                $user->save();
                return redirect()->back()->with('success',"Password has been successfully updated...");
            }
            catch(Exception $ex)
            {
                return redirect()->back()->with('error', $ex->getMessage());
            }
        }
        else
        {
            return redirect()->back()->with('error', $valid->errors());
        }
    }
    public function collection(Request $request,$type,$slug)
    {
        $category = Category::with('products')->get();
        $products = Product::with('singleImage','coupon')->where('status',1);
        $section = Section::with('products')->where('status',1)->get();
        if($type == "products" && $slug == "all")
        {
            // dd($request->all());
            if($request->has('q') && $request->q != null)
            {
                $products = $products->where('title', 'like', '%' . $request->q . '%');
            }
            $products = $products->paginate(9);
        }
        elseif($type == "category")
        {
            $find = Category::where('slug',$slug)->first();
            $products = $products->where('category_id',$find->id)->paginate(9);
        }
        elseif($type == "section")
        {
            $find = Section::where('slug',$slug)->first();
            $products = $products->with('section')->whereHas('section',function($query)use($slug){
                $query->where('slug',$slug);
            })->paginate(9);
            // dd($products->toArray());
        }

        return view('frontend.collection',compact('category','products','slug','section'));
    }
    public function  collectionview()
    {
        $category = Category::with('products')->get();
        return view('frontend.collection-view',compact('category'));
    }
    public function topCategory()
    {
        $data['category'] = Category::with(['products'=>function($query) {
            return $query->limit(5);
        }])->where('status',1)->take(4)->latest()->OrderBy('id','DESC')->get();
        $data['section'] = Section::with(['products'=>function($query) {
            return $query->where('status',1)->limit(5);
        }])->where('status',1)->take(4)->OrderBy('id','DESC')->get();
        return $data;
    }
    public function wishlist()
    {
        $wishlist = WishList::with('product')->where('user_id',auth()->user()->id)->get();
        return view('frontend.wishlist',compact('wishlist'));
    }
}
