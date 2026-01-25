<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'cohort_id',
        'name',
        'email',
        'phone',
        'instrument_interest',
        'voice_part',
        'status',
        'notes',
    ];

    public function cohort()
    {
        return $this->belongsTo(Cohort::class);
    }
}
