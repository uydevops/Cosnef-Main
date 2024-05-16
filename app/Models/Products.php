<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UrunTakip;
use Illuminate\Support\Facades\Cache;

class Products extends Model
{
    use HasFactory;


    protected $table = 'sma_products';
    protected $guarded = []; 

   //timestaps'ı kapattık
    public $timestamps = false;



    protected static function booted()
    {
        static::saved(function ($product) {
            Cache::forget('products.all');
        });

        static::deleted(function ($product) {
            Cache::forget('products.all');
        });
    }

    public function urunTakips()
    {
        return $this->hasMany(UrunTakip::class, 'product_id'); // 'product_id' sütununu belirttik
    }

}
