<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varient extends Model
{
    use HasFactory;
    protected $table = "varient";
    protected $Fillable = [
        "sub_cat_id",
        "name",
        "icon",
        "description",
    ];
}
