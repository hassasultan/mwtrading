<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupen;
use App\Models\PivotProductCoupen;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;


class CoupenController extends Controller
{
    //
    public function index()
    {
        $coupen = Coupen::all();
        return view('dashboard.admin.pages.coupen.index',compact('coupen'));
    }
    public function create()
    {
        // $product = Product::where('status',1)->get();
        return view('dashboard.admin.pages.coupen.create');
    }
    public function edit($id)
    {
        $coupen = Coupen::find($id);
        return view('dashboard.admin.pages.coupen.edit',compact('coupen'));
    }
    public function store(Request $request)
    {
        $valid = $this->validate($request,[
            'code'          => 'required|string|unique:coupen,code',
            'expiry'        => 'required|date_format:Y-m-d|after:yesterday',
            'name'          => 'string',
            'description'   => 'string',
        ]);
        try
        {
            DB::beginTransaction();
            $coupen = new Coupen();
            if ($request->has('name'))
            {
                $coupen->name = $request->name;
            }
            if ($request->has('description'))
            {
                $coupen->description = $request->description;
            }
            $coupen->code = $request->code;
            $coupen->expiry = $request->expiry;
            $coupen->save();
            DB::commit();

            return redirect()->route('coupen.index')->with('success', 'Record created successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function update(Request $request, $id)
    {
        $valid = $this->validate($request,[
            'code'          => 'required|string|unique:coupen,code,'.$id,
            'expiry'        => 'required|date_format:Y-m-d|after:yesterday',
            'name'          => 'string',
            'description'   => 'string',
        ]);
        $slug  = Str::slug($request->name);
        try
        {
            DB::beginTransaction();
            $coupen = Coupen::find($id);
            if ($request->has('name'))
            {
                $coupen->name = $request->name;
            }
            if ($request->has('description'))
            {
                $coupen->description = $request->description;
            }
            $coupen->code = $request->code;
            $coupen->expiry = $request->expiry;
            $coupen->save();
            DB::commit();

            return redirect()->route('coupen.index')->with('success', 'Record created successfully.');
        }
        catch(Exception $ex)
        {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function delete($id)
    {
        $coupen = Coupen::find($id);
        $coupen->delete();
        return redirect()->back()->with('success', 'Record deleted successfully.');

    }
}
