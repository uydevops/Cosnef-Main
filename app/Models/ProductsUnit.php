<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsUnit extends Model
{
    use HasFactory;

    protected $table = 'sma_units';

    //non guarded fields
    protected $guarded = [];

    public  $timestamps = false;
}
