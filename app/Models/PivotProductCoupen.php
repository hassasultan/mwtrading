<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotProductCoupen extends Model
{
    use HasFactory;
    protected $table = "pivot_product_coupens";
    protected $Fillable = [
        'coupen_id',
        'product_id',
    ];
}
