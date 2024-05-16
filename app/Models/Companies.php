<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;


    protected $table = 'sma_companies';

    protected $guarded = [];


    public $timestamps = false;
}
