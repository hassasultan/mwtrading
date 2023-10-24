<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = "sub_category";
    protected $Fillable = [
        "slug",
        "category_id",
        "name",
        "icon",
        "description",
        "status",
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function products()
    {
        return $this->hasMany(Product::class,'subcat_id','id')->where('status',1);
    }
}
