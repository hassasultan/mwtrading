<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SaveImage
{
    /**
     * Set slug attribute.
     *
     * @param string $value
     * @return void
     */
    public function CatImage($image)
    {
        // $this->attributes['slug'] = Str::slug($image, config('roles.separator'));
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'image'.'/'.'category/'.$filenamenew;
        $filename       = $img->move(public_path('storage/image'.'/'.'category/'),$filenamenew);
        return $filenamepath;
    }

    public function BannerImage($image)
    {
        // $this->attributes['slug'] = Str::slug($image, config('roles.separator'));
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'image'.'/'.'banner/'.$filenamenew;
        $filename       = $img->move(public_path('storage/image'.'/'.'banner/'),$filenamenew);
        return $filenamepath;
    }

    public function ProductFeaturedImage($image)
    {
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'image'.'/'.'product/featured/'.$filenamenew;
        $filename       = $img->move(public_path('storage/image'.'/'.'product/featured/'),$filenamenew);
        return $filenamepath;

    }
    public function ProductImage($image)
    {
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'image'.'/'.'product/image/'.$filenamenew;
        $filename       = $img->move(public_path('storage/image'.'/'.'product/image/'),$filenamenew);
        return $filenamepath;

    }
    public function serviceImage($image)
    {
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'service/image'.'/'.'img/'.$filenamenew;
        $filename       = $img->move(public_path('storage/service/image'.'/'.'img'),$filenamenew);
        return $filenamepath;

    }
    public function siteLogo($image)
    {
        $img = $image;
        $number = rand(1,999);
        $numb = $number / 7 ;
        $extension      = $img->extension();
        $filenamenew    = date('Y-m-d')."_.".$numb."_.".$extension;
        $filenamepath   = 'image/logo'.'/'.'img/'.$filenamenew;
        $filename       = $img->move(public_path('storage/image/logo'.'/'.'img'),$filenamenew);
        return $filenamepath;

    }
}
