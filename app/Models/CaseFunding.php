<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaseFunding extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_id',
        'amount', 
    ];

        public function casse(): BelongsTo
    {
        return $this->belongsTo(Casse::class, 'case_id');
    }
}
