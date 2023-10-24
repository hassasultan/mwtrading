<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;
use App\Traits\SaveImage;


class CategoryController extends Controller
{
    //
    use SaveImage;

    public function index()
    {
        $category = Category::all();
        return view('dashboard.admin.pages.category.index',compact('category'));
    }
    public function create()
    {
        return view('dashboard.admin.pages.category.create');
    }
    public function store(Request $request)
    {
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:category,name',
            'description'   => 'string',
            'icon'          => 'image|max:2048',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $cat = new Category;
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

            return redirect()->route('category.index')->with('success', 'Record created successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('dashboard.admin.pages.category.edit',compact('category'));
    }
    public function update($id,Request $request)
    {
        $valid = $this->validate($request,[
            'name'          => 'required|string|unique:category,name,'.$id,
            'description'   => 'string',
            'icon'          => 'image|max:2048',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $cat = Category::find($id);
            if($request->has('name'))
            {
                $cat->name  = $request->name;
                $cat->slug          = $slug;
            }
            if($request->has('description'))
            {
                $cat->description   = $request->description;
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

            return redirect()->route('category.index')->with('success', 'Record Updated successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
}
