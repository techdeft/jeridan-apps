<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'kyc_id'
        
    ];

      public function kyc(): BelongsTo
    {
        return $this->belongsTo(Kyc::class, 'kyc_id');
    }
}
