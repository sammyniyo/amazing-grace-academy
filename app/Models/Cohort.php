<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cohort extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'start_date',
        'end_date',
        'location',
        'status',
        'capacity',
        'description',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    /** Statuses that allow public class registration. */
    public const ACCEPTING_REGISTRATION_STATUSES = ['open', 'progress'];

    public function isAcceptingRegistration(): bool
    {
        return in_array($this->status, self::ACCEPTING_REGISTRATION_STATUSES, true);
    }

    public function scopeAcceptingRegistration($query)
    {
        return $query->whereIn('status', self::ACCEPTING_REGISTRATION_STATUSES);
    }
}
