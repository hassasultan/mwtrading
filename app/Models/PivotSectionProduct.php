<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotSectionProduct extends Model
{
    use HasFactory;
    protected $table = "pivot_sections_products";
    protected $Fillable = [
        'section_id',
        'product_id',
    ];
}
