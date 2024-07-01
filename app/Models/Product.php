<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded=['id'];
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

     public function scopeCategory($query, $categoryId)
    {
        if ($categoryId) {
            return $query->where('category_id', $categoryId);
        }
        return $query;
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

     public function image(){
        return $this->morphOne(Image::class,'imageable');
    }
}
