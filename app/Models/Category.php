<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $Fillable = [
        "slug",
        "name",
        "description",
        "icon",
        "status",
    ];
    public function products()
    {
        return $this->hasMany(Product::class,'category_id','id')->where('status',1);
    }
    public function subCategory()
    {
        return $this->hasMany(SubCategory::class,'category_id','id');
    }
}
