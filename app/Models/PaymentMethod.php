<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentMethod extends Model
{
    use HasFactory;
     protected $fillable = [
        'id',
        'name',
        'status', 
    ];


    public function payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

    public function payment_details(): HasMany
    {
        return $this->hasMany(PaymentDetails::class);
    }
}
