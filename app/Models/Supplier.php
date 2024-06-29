<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
     // Relación de muchos a uno con Producto
     public function products()
     {
         return $this->hasMany(Product::class);
     }
}
