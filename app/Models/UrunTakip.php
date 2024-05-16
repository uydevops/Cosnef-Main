<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class UrunTakip extends Model
{
    use HasFactory;

    protected $table = 'sma_urun_takip';
    protected $guarded = [];



    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
