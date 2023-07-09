<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LawyerCase extends Model
{
    use HasFactory;
     protected $fillable = [
        'lawyer_id',
        'case_id', 
    ];

        public function casse(): BelongsTo
    {
        return $this->belongsTo(Casse::class, 'case_id');
    }

        public function lawyer(): BelongsTo
    {
        return $this->belongsTo(Lawyer::class, 'lawyer_id');
    }
}
