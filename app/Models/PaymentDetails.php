<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentDetails extends Model
{
    use HasFactory;
     protected $fillable = [
        'id',
        'lawyer_id',
        'payment_method',
        'bank_name', 
        'account_number', 
        'account_name'
    ];


      public function lawyer(): BelongsTo
    {
        return $this->belongsTo(Lawyer::class, 'lawyer_id');
    }

      public function payment_method(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method');
    }
}
