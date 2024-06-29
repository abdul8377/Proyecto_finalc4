<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_detail extends Model
{
    use HasFactory;
     // Relación de muchos a uno con Producto
     public function product()
     {
         return $this->belongsTo(Product::class);
     }
}
