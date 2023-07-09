<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Casse extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'description',
        'category_id',
        'status',
        'user_status',
        'reason'
         
    ];

        public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

     public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

        public function case_file(): HasMany
    {
        return $this->hasMany(CaseFile::class);
    }

        public function payment(): HasMany
    {
        return $this->hasMany(Payment::class);
    }

        public function case_funding(): HasMany
    {
        return $this->hasMany(CaseFunding::class);
    }
        public function case_update(): HasMany
    {
        return $this->hasMany(CaseUpdate::class);
    }

        public function lawyer_case(): HasOne
    {
        return $this->hasOne(LawyerCase::class);
    }
}
