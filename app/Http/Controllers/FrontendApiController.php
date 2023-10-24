<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Section;
use App\Models\Category;
use App\Models\SubCategory;
use Exception;
use Illuminate\Support\Facades\Hash;
use App\Models\Banner;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;


class FrontendApiController extends Controller
{
    //
    public function home()
    {
        $data['category'] = Category::with('products','products.images')->where('status',1)->get();
        $data['section'] = Section::with('products','products.coupon','products.images')->whereHas('products',function($query){
            $query->where('status', 1);
        })->whereHas('products.coupon',function($query){
            $query->where('expiry', '>=', Carbon::today());
        })->where('status',1)->get();
        $data['trending'] = Product::with('coupon','images')->whereHas('coupon',function($query){
            $query->where('expiry', '>=', Carbon::today());
        })->where('status',1)->where('IsFeature',0)->get();
        $data['featured'] = Product::with('coupon','images')->whereHas('coupon',function($query){
            $query->where('expiry', '>=', Carbon::today());
        })->where('status',1)->where('IsFeature',1)->get();
        $data['banner'] = Banner::where('status',1)->get();

        return $data;

    }
    public function category()
    {
        $category = Category::with('products','products.images')->where('status',1)->get();
        return $category;
    }
    public function categoryDetail(Request $request)
    {
        $category = Category::with('products','products.images')->where('status',1)->find($request->cat_id);
        return $category;
    }
    public function subcategory(Request $request)
    {
        $category = SubCategory::where('status',1)->where('category_id',$request->cat_id)->get();
        return $category;
    }
    public function sections()
    {
        $section = Section::with('products','products.images')->where('status',1)->get();
        return $section;
    }
    public function sectionDetail(Request $request)
    {
        $section = Section::with('products','products.images')->where('status',1)->find($request->sec_id);
        return $section;
    }
    public function products()
    {
        $products = Product::with('images','coupon','section')->where('status',1)->get();
        return $products;
    }
    public function details(Request $request)
    {
        $product = Product::with('images','coupon','section')->where('slug',$request->slug)->first();
        return $product;
    }

}
