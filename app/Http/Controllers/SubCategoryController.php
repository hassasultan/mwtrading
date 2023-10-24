<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;
use App\Traits\SaveImage;
use App\Models\SubCategory;

class SubCategoryController extends Controller
{
    //
    use SaveImage;

    public function index()
    {
        $subcategory = SubCategory::all();
        return view('dashboard.admin.pages.subCategory.index',compact('subcategory'));
    }
    public function create()
    {
        $category = Category::where('status',1)->get();
        return view('dashboard.admin.pages.subCategory.create',compact('category'));
    }
    public function store(Request $request)
    {
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:sub_category,name',
            'category_id'   => 'required|numeric|exists:category,id',
            'description'   => 'string',
            'icon'          => 'image|max:2048',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $cat = new SubCategory;
            $cat->category_id  = $request->category_id;
            $cat->name         = $request->name;
            if($request->has('description'))
            {
                $cat->description   = $request->description;
            }
            if($request->has('icon'))
            {
                $cat->icon   = $this->CatImage($request->icon);
            }
            $cat->slug          = $slug;
            $cat->status        = 1;
            $cat->save();

            DB::commit();

            return redirect()->route('subcategory.index')->with('success', 'Record created successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function edit($id)
    {
        $category = Category::where('status',1)->get();
        $subcategory = SubCategory::find($id);
        return view('dashboard.admin.pages.subCategory.edit',compact('subcategory','category'));
    }
    public function update($id,Request $request)
    {
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:sub_category,name,'.$id,
            'category_id'   => 'required|numeric|exists:category,id',
            'description'   => 'string',
            'icon'          => 'image|max:2048',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $cat = SubCategory::find($id);
            if($request->has('name'))
            {
                $cat->name  = $request->name;
                $cat->slug          = $slug;
            }
            if($request->has('description'))
            {
                $cat->description   = $request->description;
            }
            if($request->has('category_id'))
            {
                $cat->category_id   = $request->category_id;
            }
            if($request->has('icon'))
            {
                $cat->icon   = $this->CatImage($request->icon);
            }
            if($request->has('status'))
            {
                $cat->status = $request->status;
            }
            $cat->save();

            DB::commit();

            return redirect()->route('subcategory.index')->with('success', 'Record Updated successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
}
