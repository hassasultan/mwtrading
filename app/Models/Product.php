<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $Fillable = [
        "meta_title",
        "meta_description",
        "slug",
        "category_id",
        "subcat_id",
        "title",
        "IsFeature",
        "fea_img",
        "description",
        "old_price",
        "new_price",
        "discount",
        "link",
        "status",
    ];
    public function coupon()
    {
        return $this->belongsToMany(
            Coupen::class,
            PivotProductCoupen::class,
            'product_id',
            'coupen_id',
        );
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class,'product_id','id');
    }
    public function singleImage()
    {
        return $this->belongsTo(ProductImage::class,'id','product_id');
    }
    public function wishlist()
    {
        return $this->belongsTo(WishList::class,'id','product_id')->where('user_id',auth()->user()->id);
    }
    public function section()
    {
        return $this->belongsToMany(
            Section::class,
            PivotSectionProduct::class,
            'product_id',
            'section_id',
        );
    }

}
