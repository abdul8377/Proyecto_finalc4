<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded=['id'];
    use HasFactory;
     // Relación de uno a muchos con ComprobantesDePago
     public function payment_proofs()
     {
         return $this->hasMany(Payment_proof::class);
     }
}
