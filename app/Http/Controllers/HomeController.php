<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use App\Traits\SaveImage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    use SaveImage;
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()->role == 0)
        {
            return redirect()->route('admin.home');
        }
        else
        {
            return redirect()->route('index');
        }
    }
    public function dashboard()
    {
        if(auth()->user()->role == 0)
        {
            return view('dashboard.admin.pages.home');
        }
    }
    public function site_setting()
    {
        $site = SiteSetting::first();
        return view('dashboard.admin.pages.site.index',compact('site'));
    }
    public function update_site_setting(Request $request)
    {
        $data = $request->except(['_token']);
        if($request->has('logo'))
        {
            $data['logo'] = $this->siteLogo($request->logo);
        }
        $site = SiteSetting::first()->update($data);
        return redirect()->back()->with('success', 'Record updated successfully.');
    }
}
