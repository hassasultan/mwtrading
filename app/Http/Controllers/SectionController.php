<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;
use App\Models\Product;
use App\Models\PivotSectionProduct;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;

class SectionController extends Controller
{
    //
    public function index()
    {
        $section = Section::all();
        return view('dashboard.admin.pages.section.index',compact('section'));
    }
    public function create()
    {
        $product = Product::where('status',1)->get();
        return view('dashboard.admin.pages.section.create',compact('product'));
    }
    public function edit($id)
    {
        $section = Section::with('products')->find($id);
        // dd($section->toArray());
        $product = Product::where('status',1)->get();
        return view('dashboard.admin.pages.section.edit',compact('section','product'));
    }
    public function store(Request $request)
    {
        $valid = $this->validate($request,[
            'name'         => 'required|string|unique:sections,name',
            'product_id'         => 'required',
            'description'   => 'string',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $section = new Section();
            if ($request->has('name'))
            {
                $section->name = $request->name;
            }
            if ($request->has('description'))
            {
                $section->description = $request->description;
            }
            $section->slug = $slug;
            $section->save();
            if($request->has('product_id'))
            {
                foreach($request->product_id as $row)
                {
                   $pivot = new PivotSectionProduct();
                   $pivot->section_id = $section->id;
                   $pivot->product_id = $row;
                   $pivot->save();
                }
            }
            DB::commit();

            return redirect()->route('section.index')->with('success', 'Record created successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $valid = $this->validate($request,[
            'name'         => 'required|string|unique:sections,name,'.$id,
            'product_id'         => 'required',
            'status'         => 'required|in:0,1',
            'description'   => 'string',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $section = Section::find($id);
            if ($request->has('name'))
            {
                $section->name = $request->name;
            }
            if ($request->has('description'))
            {
                $section->description = $request->description;
            }
            $section->slug = $slug;
            $section->status =  $request->status;
            $section->save();
            if($request->has('product_id'))
            {
                $new_pivot = PivotSectionProduct::where('section_id',$section->id)->get();
                foreach($new_pivot as $item)
                {
                    $item->delete();
                }
                foreach($request->product_id as $row)
                {
                   $pivot = new PivotSectionProduct();
                   $pivot->section_id = $section->id;
                   $pivot->product_id = $row;
                   $pivot->save();
                }
            }
            DB::commit();

            return redirect()->route('section.index')->with('success', 'Record created successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function delete($id)
    {
        $banner = Section::find($id);
        $img = PivotSectionProduct::where('section_id',$banner->id)->get();
        foreach($img as $row)
        {
            $row->delete();
        }
        $banner->delete();
        return redirect()->back()->with('success', 'Record Deleted successfully.');

    }
}
