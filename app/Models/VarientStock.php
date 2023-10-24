<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarientStock extends Model
{
    use HasFactory;
    protected $table = "varient_stock";
    protected $Fillable = [
        "varient_id",
        "product_id",
        "stock",
    ];
}
