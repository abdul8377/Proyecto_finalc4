<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
     // Relación de muchos a uno con Categorias
     public function category()
     {
         return $this->belongsTo(Category::class);
     }

     // Relación con Proveedores
     public function supplier()
     {
         return $this->belongsTo(Supplier::class);
     }

     // Relación con DetalleProductos
     public function product_details()
     {
         return $this->hasMany(Product_detail::class);
     }

     // Relación con DetalleComprobante
     public function vaucher_details()
     {
         return $this->hasMany(Vaucher_detail::class);
     }
}
