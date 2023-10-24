<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $table = "sections";
    protected $Fillable = [
        'name',
        'icon',
        'description',
        'status',
    ];
    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            PivotSectionProduct::class,
            'section_id',
            'product_id',
        );
    }
}
