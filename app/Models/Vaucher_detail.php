<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaucher_detail extends Model
{
    use HasFactory;
    // Relación de muchos a uno con ComprobanteDePago
    public function payment_proof()
    {
        return $this->belongsTo(Payment_proof::class);
    }

    // Relación de muchos a uno con Producto
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
