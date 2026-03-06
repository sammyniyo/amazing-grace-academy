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

        $path = ltrim(trim((string) $this->cover_image), '/');
        if ($path === '') {
            return null;
        }

        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }

        if (str_starts_with($path, 'public/')) {
            $path = substr($path, 7);
        }
        if (str_starts_with($path, 'storage/')) {
            $path = substr($path, 8);
        }
        if (str_starts_with($path, 'images/')) {
            return asset($path);
        }
        if (
            ! str_contains($path, '/')
            && preg_match('/\.(jpg|jpeg|png|webp|gif|svg)$/i', $path)
        ) {
            return asset('images/' . $path);
        }

        return asset('storage/' . $path);
    }
}
