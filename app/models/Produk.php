<?php

namespace App\Models;

use Database\Factories\SomeFancyFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
     /** @return SomeFancyFactory */
     protected static function newFactory()
     {
         return SomeFancyFactory::new();
     }
    protected $fillable=[
        'nama',
        'harga',
        'berat',
   'gambar'
    ];
}
