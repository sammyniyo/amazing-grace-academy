<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:50',
            'email' => 'nullable|email',
            'cohort_id' => 'nullable|exists:cohorts,id',
            'instrument_interest' => 'nullable|string|max:100',
            'message' => 'nullable|string',
        ]);

        Member::create([
            'name' => $data['name'],
            'phone' => $data['phone'] ?? null,
            'email' => $data['email'] ?? null,
            'cohort_id' => $data['cohort_id'] ?? null,
            'instrument_interest' => $data['instrument_interest'] ?? null,
            'notes' => $data['message'] ?? null,
            'status' => 'applied',
        ]);

        return back()->with('success', 'Registration received! We will confirm your cohort shortly.');
    }
}
