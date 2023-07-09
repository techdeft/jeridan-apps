<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;
     protected $fillable = [
        'lawyer_id',
        'case_id',
        'payment_method',
        'payment_details',
        'status',
        'note',
    ];


        public function lawyer(): BelongsTo
    {
        return $this->belongsTo(Lawyer::class, 'lawyer_id');
    }

        public function case(): BelongsTo
    {
        return $this->belongsTo(Casse::class, 'case_id');
    }

        public function payment_method(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method');
    }

        public function payment_details(): BelongsTo
    {
        return $this->belongsTo(PaymentDetails::class, 'payment_details');
    }
}
