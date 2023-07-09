<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'country_id',
        'state_id',
        'city',
        'street',
        'house_no', 
    ];


public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class, 'country_id');
    }
public function state(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id');
    }

}
