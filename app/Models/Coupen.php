<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupen extends Model
{
    use HasFactory;
    protected $table = "coupen";
    protected $Fillable = [
        'name',
        'code',
        'description',
        'expiry',
        'status',
    ];
    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            PivotProductCoupen::class,
            'coupen_id',
            'product_id',
        );
    }
}
