<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin account for dashboard access (idempotent)
        $admin = User::firstOrCreate(
            ['email' => 'admin@aga.local'],
            [
                'name' => 'AGA Admin',
                'password' => 'password', // hashed via model cast
            ]
        );
        if (! $admin->is_admin) {
            $admin->is_admin = true;
            $admin->save();
        }

        \App\Models\Cohort::firstOrCreate(
            ['code' => 'COH-2026'],
            [
                'name' => 'Class of 2026',
                'start_date' => now()->startOfMonth(),
                'end_date' => now()->addMonths(3),
                'location' => 'Kigali Bilingual Church',
                'status' => 'active',
                'capacity' => 30,
                'description' => 'Saturday rehearsals 2–5 PM',
            ]
        );

        \App\Models\Product::firstOrCreate(
            ['slug' => 'hymns-renewed'],
            [
                'title' => 'Hymns Renewed (Album)',
                'type' => 'album',
                'format' => 'MP3 + PDF',
                'price' => 10000,
                'is_active' => true,
                'description' => 'Recorded arrangements by Amazing Grace Academy choir.',
            ]
        );

        \App\Models\Event::firstOrCreate(
            ['title' => 'Annual Choir Concert', 'event_date' => now()->addMonths(5)],
            [
                'location' => 'Kigali Bilingual Church',
                'status' => 'upcoming',
                'description' => 'Featuring graduates, choirs, instrumental ensembles.',
            ]
        );
    }
}
