<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
     // Relación de uno a muchos con ComprobantesDePago
     public function payment_proofs()
     {
         return $this->hasMany(Payment_proof::class, 'EmpleadoID');
     }
}
