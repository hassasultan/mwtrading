<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WishList;

class WishListController extends Controller
{
    //
    public function add($id)
    {
        $check = WishList::where('user_id',auth()->user()->id)->where('product_id',$id)->first();
        if($check != null)
        {
            $check->delete();
            return response()->json(["message"=>"unlike","count"=>count(auth()->user()->wishlistCount)]);
        }
        else
        {
            $new = new WishList();
            $new->product_id = $id;
            $new->user_id = auth()->user()->id;
            $new->save();
            return response()->json(["message"=>"like","count"=>count(auth()->user()->wishlistCount)]);

        }
    }
}
