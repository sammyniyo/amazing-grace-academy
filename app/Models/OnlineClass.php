<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover_image',
        'level',
        'schedule_summary',
        'meeting_link',
        'status',
        'starts_at',
        'ends_at',
        'capacity',
        'is_featured',
        'sort_order',
    ];

    protected $casts = [
        'starts_at' => 'date',
        'ends_at' => 'date',
        'is_featured' => 'boolean',
    ];

    public const STATUS_DRAFT = 'draft';
    public const STATUS_PUBLISHED = 'published';
    public const STATUS_CLOSED = 'closed';

    public const LEVELS = [
        'sol-fa' => 'Sol-Fa',
        'staff' => 'Staff notation',
        'instrument' => 'Instrument (Piano/Guitar/Violin)',
        'other' => 'Other',
    ];

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

    public function scopePublished($query)
    {
        return $query->where('status', self::STATUS_PUBLISHED);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function isPublished(): bool
    {
        return $this->status === self::STATUS_PUBLISHED;
    }
}
