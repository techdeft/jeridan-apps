<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaseFile extends Model
{
    use HasFactory;
     protected $fillable = [
        'path',
        'case_id', 
    ];

           public function casse(): BelongsTo
    {
        return $this->belongsTo(Casse::class, 'case_id');
    }
}
