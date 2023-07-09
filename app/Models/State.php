<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
        'path',
        'country_id',
        
    ];

    public function country(): BelongsTo
{
    return $this->belongsTo(Country::class, 'country_id');
}
}
