<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Traits\SaveImage;
use Exception;

class BannerController extends Controller
{
    //
    use SaveImage;

    public function index()
    {
        $banner = Banner::all();
        return view('dashboard.admin.pages.banner.index', compact('banner'));
    }
    public function create()
    {
        return view('dashboard.admin.pages.banner.create');
    }
    public function store(Request $request)
    {
        $valid = $this->validate($request, [
            // 'title'          => 'required|string',
            // 'price_desc'   => 'required|string',
            'link'   => 'required|string',
            'banner'          => 'image|max:2048',
        ]);
        try {
            DB::beginTransaction();
            $banner = new Banner;
            // $banner->title = $request->title;
            if ($request->has('title'))
            {
                $banner->title = $request->title;
            }
            if ($request->has('price_desc')) {
                $banner->price_desc   = $request->price_desc;
            }
            $banner->link   = $request->link;
            $banner->banner         = $this->BannerImage($request->banner);
            $banner->status        = 1;
            $banner->save();

            DB::commit();

            return redirect()->route('banner.index')->with('success', 'Record created successfully.');
        } catch (Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('dashboard.admin.pages.banner.edit', compact('banner'));
    }
    public function update($id, Request $request)
    {
        $valid = $this->validate($request, [
            // 'title'          => 'required|string',
            // 'price_desc'   => 'required|string',
            'link'   => 'required|string',
            'banner'          => 'image|max:2048',
            'status'         => 'required|in:0,1',
        ]);
        try {
            DB::beginTransaction();
            $banner = Banner::find($id);
            // $banner->price_desc   = $request->price_desc;
            $banner->link   = $request->link;
            if ($request->has('banner'))
            {
                $banner->banner = $this->BannerImage($request->banner);
            }
            if ($request->has('title'))
            {
                $banner->title = $request->title;
            }
            $banner->status        = $request->status;
            $banner->save();

            DB::commit();

            return redirect()->route('banner.index')->with('success', 'Record Updated successfully.');
        } catch (Exception $ex) {
            return back()->with('error', $ex->getMessage());
        }
    }
    public function delete($id)
    {
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->back()->with('success', 'Record Updated successfully.');

    }
}
