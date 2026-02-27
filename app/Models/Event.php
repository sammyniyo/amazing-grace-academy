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
        'cover_image',
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

    public function getCoverUrlAttribute(): ?string
    {
        if (! $this->cover_image) {
            return null;
        }

        $path = ltrim((string) $this->cover_image, '/');
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        return str_starts_with($path, 'storage/')
            ? asset($path)
            : asset('storage/' . $path);
    }
}
