<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupen;
use App\Models\PivotProductCoupen;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Exception;

class AssignCoupenController extends Controller
{
    //
    public function index()
    {

    }
    public function create()
    {

    }
    public function edit($id)
    {
        $coupen = Coupen::with('products')->find($id);
        // dd($coupen->toArray());
        $product = Product::where('status',1)->get();
        return view('dashboard.admin.pages.coupen.assign',compact('coupen','product'));
    }
    public function store(Request $request)
    {
        $valid = $this->validate($request,[
            'product_id'  => 'required',
            'coupen_id'  =>  'required',
        ]);
        try
        {
            DB::beginTransaction();
            if($request->has('product_id'))
            {
                $new_pivot = PivotProductCoupen::where('coupen_id',$request->coupen_id)->get();
                foreach($new_pivot as $item)
                {
                    $item->delete();
                }
                foreach($request->product_id as $row)
                {
                   $pivot = new PivotProductCoupen();
                   $pivot->coupen_id = $request->coupen_id;
                   $pivot->product_id = $row;
                   $pivot->save();
                }
            }
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

    }
}
