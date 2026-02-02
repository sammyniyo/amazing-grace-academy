<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'event_date',
        'location',
        'status',
        'description',
        'requires_registration',
        'accepts_support',
    ];

    protected $casts = [
        'event_date' => 'date',
        'requires_registration' => 'boolean',
        'accepts_support' => 'boolean',
    ];

    public function registrations()
    {
        return $this->hasMany(EventRegistration::class);
    }
}
