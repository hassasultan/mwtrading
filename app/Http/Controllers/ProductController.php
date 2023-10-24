<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;
use App\Traits\SaveImage;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Brand;
use App\Models\ProductImage;

class ProductController extends Controller
{
    //
    use SaveImage;

    public function index()
    {
        $product = Product::all();
        return view('dashboard.admin.pages.product.index',compact('product'));
    }
    public function create()
    {
        $category = Category::where('status',1)->get();
        $brand = Brand::where('status',1)->get();
        return view('dashboard.admin.pages.product.create',compact('category','brand'));
    }
    public function subcat(Request $request)
    {
        // dd($request->all());
        $subcategory = SubCategory::where('category_id',$request->category)->get();
        return $subcategory;
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:product,title',
            'category_id'   => 'required|numeric|exists:category,id',
            'subcategory'   => 'required|numeric|exists:sub_category,id',
            'description'   => 'string',
            'IsFeature'     => 'required|numeric|In:0,1',
            'old_price'     => 'required|gt:new_price',
            'new_price'     => 'required|lt:old_price',
            'fea_img'       => 'required|image|max:2048',
            'image'         => 'required',
            'link'          => 'required',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            // dd(((int)($request->old_price - $request->new_price)/(int)$request->new_price)*100);
            DB::beginTransaction();
            $product = new Product;
            $product->category_id  = $request->category_id;
            $product->subcat_id  = $request->subcategory;
            $product->title         = $request->name;
            $product->IsFeature         = $request->IsFeature;
            $product->fea_img   = $this->ProductFeaturedImage($request->fea_img);
            if($request->has('meta_title'))
            {
                $product->meta_title   = $request->meta_title;
            }
            if($request->has('meta_description'))
            {
                $product->meta_description   = $request->meta_description;
            }
            if($request->has('description'))
            {
                $product->description   = $request->description;
            }
            $product->old_price         = $request->old_price;
            $product->new_price         = $request->new_price;
            $product->discount          = ((int)($request->old_price - $request->new_price)/(int)$request->old_price)*100;
            $product->slug              = $slug;
            $product->link              = $request->link;
            $product->status            = 1;
            $product->created_by        = auth()->user()->id;
            $product->save();
            if($request->has('image'))
            {
                foreach($request->image as $row)
                {
                    $img = new ProductImage();
                    $img->product_id = $product->id;
                    $img->image = $this->ProductImage($row);
                    $img->save();
                }
            }

            DB::commit();

            return redirect()->route('product.index')->with('success', 'Record created successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function edit($id)
    {
        $product = Product::find($id);
        $productImg = ProductImage::where('product_id',$id)->get();
        $category = Category::where('status',1)->get();
        $brand = Brand::where('status',1)->get();
        $subcategory = SubCategory::where('status',1)->get();
        return view('dashboard.admin.pages.product.edit',compact('category','brand','subcategory','product','productImg'));
    }
    public function update($id,Request $request)
    {
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:product,title,'.$id,
            'category_id'   => 'required|numeric|exists:category,id',
            'subcategory'   => 'required|numeric|exists:sub_category,id',
            'description'   => 'string',
            'IsFeature'     => 'required|numeric|In:0,1',
            'old_price'     => 'required|gt:new_price',
            'new_price'     => 'required|lt:old_price',
            'link'          => 'required',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            // dd(((int)($request->old_price - $request->new_price)/(int)$request->new_price)*100);
            DB::beginTransaction();
            $product = Product::find($id);
            $product->category_id  = $request->category_id;
            $product->subcat_id  = $request->subcategory;
            $product->title         = $request->name;
            $product->IsFeature         = $request->IsFeature;
            if($request->has('fea_img'))
            {
                $product->fea_img   = $this->ProductFeaturedImage($request->fea_img);
            }
            if($request->has('meta_title'))
            {
                $product->meta_title   = $request->meta_title;
            }
            if($request->has('meta_description'))
            {
                $product->meta_description   = $request->meta_description;
            }
            if($request->has('description'))
            {
                $product->description   = $request->description;
            }
            $product->old_price         = $request->old_price;
            $product->new_price         = $request->new_price;
            $product->discount          = ((int)($request->old_price - $request->new_price)/(int)$request->old_price)*100;
            $product->slug              = $slug;
            $product->link              = $request->link;
            $product->status            = 1;
            $product->created_by        = auth()->user()->id;
            $product->save();
            if($request->has('image'))
            {
                foreach($request->image as $row)
                {
                    $img = new ProductImage();
                    $img->product_id = $product->id;
                    $img->image = $this->ProductImage($row);
                    $img->save();
                }
            }

            DB::commit();

            return redirect()->route('product.index')->with('success', 'Record Update successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function deleteImages($id)
    {
        $img = ProductImage::find($id);
        $img->delete();
        return redirect()->back()->with('success', 'Record Deleted successfully.');

    }
    public function delete($id)
    {
        $banner = Product::find($id);
        $img = ProductImage::where('product_id',$banner->id)->get();
        foreach($img as $row)
        {
            $row->delete();
        }
        $banner->delete();
        return redirect()->back()->with('success', 'Record Deleted successfully.');

    }
}
