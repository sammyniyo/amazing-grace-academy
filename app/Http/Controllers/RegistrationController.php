<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
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

        $registrationOpen = Cohort::acceptingRegistration()->exists();
        if (! $registrationOpen) {
            return back()
                ->withInput($request->except('password'))
                ->with('error', 'Registration is currently closed. Please check back for the next intake.');
        }

        if (! empty($data['cohort_id'])) {
            $cohort = Cohort::find($data['cohort_id']);
            if ($cohort && ! $cohort->isAcceptingRegistration()) {
                return back()
                    ->withInput($request->except('password'))
                    ->with('error', 'That cohort is not accepting registrations. Please choose another or wait for the next intake.');
            }
        }

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
