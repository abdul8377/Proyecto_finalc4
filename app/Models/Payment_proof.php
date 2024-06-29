<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment_proof extends Model
{
    use HasFactory;
     // Relación de muchos a uno con Cliente
     public function customer()
     {
         return $this->belongsTo(Customer::class);
     }

     // Relación de muchos a uno con Empleado
     public function employee()
     {
         return $this->belongsTo(Employee::class);
     }

     // Relación de uno a muchos con DetalleComprobante
     public function vaucher_details()
     {
         return $this->hasMany(Vaucher_detail::class);
     }
}
