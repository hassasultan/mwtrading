<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;
use App\Traits\SaveImage;

class BrandController extends Controller
{
    //
    use SaveImage;

    public function index()
    {
        $brand = Brand::all();
        return view('dashboard.admin.pages.brand.index',compact('brand'));
    }
    public function create()
    {
        return view('dashboard.admin.pages.brand.create');
    }
    public function store(Request $request)
    {
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:brand,name',
            'description'   => 'string',
            'logo'          => 'image|max:2048',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $brand = new Brand;
            $brand->name         = $request->name;
            if($request->has('description'))
            {
                $brand->description   = $request->description;
            }
            if($request->has('logo'))
            {
                $brand->logo   = $this->CatImage($request->logo);
            }
            $brand->slug          = $slug;
            $brand->status        = 1;
            $brand->save();

            DB::commit();

            return redirect()->route('brand.index')->with('success', 'Record created successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('dashboard.admin.pages.brand.edit',compact('brand'));
    }
    public function update($id,Request $request)
    {
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:brand,name,'.$id,
            'description'   => 'string',
            'icon'          => 'image|max:2048',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $brand = Brand::find($id);
            if($request->has('name'))
            {
                $brand->name  = $request->name;
                $brand->slug          = $slug;
            }
            if($request->has('description'))
            {
                $brand->description   = $request->description;
            }
            if($request->has('logo'))
            {
                $brand->logo   = $this->CatImage($request->logo);
            }
            if($request->has('status'))
            {
                $brand->status = $request->status;
            }
            $brand->save();

            DB::commit();

            return redirect()->route('brand.index')->with('success', 'Record Updated successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
}
