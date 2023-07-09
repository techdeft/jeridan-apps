<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CaseUpdate extends Model
{
    use HasFactory;
    protected $fillable = [
        'case_id', 
        'title',
        'note',
        'file',
    ];

        public function casse(): BelongsTo
    {
        return $this->belongsTo(Casse::class, 'case_id');
    }

        public function file(): HasMany
    {
        return $this->hasMany(CaseFile::class);
    }
}
