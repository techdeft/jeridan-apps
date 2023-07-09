<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lawyer extends Model
{
    use HasFactory;
     protected $fillable = [
        'id',
        'user_id',
        'status',
        'note', 
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

       public function payment_details(): HasMany
    {
        return $this->hasMany(PaymentDetails::class);
    }

       public function payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

      public function cases(): HasMany
    {
        return $this->hasMany(LawyerCase::class);
    }

      public function kyc(): HasOne
    {
        return $this->hasOne(Kyc::class);
    }

}
