<?php

namespace App\Http\Controllers;

use App\Models\Cohort;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
            'message' => 'nullable|string|max:1000',
        ], [
            'name.required' => 'Please enter your full name.',
            'message.max' => 'Your message may not be longer than 1000 characters.',
        ]);

        // Require at least one contact method
        if (empty(trim($data['phone'] ?? '')) && empty(trim($data['email'] ?? ''))) {
            return back()
                ->withInput($request->only('name', 'phone', 'email', 'cohort_id', 'instrument_interest', 'message'))
                ->withErrors(['phone' => 'Please provide either a phone number or an email so we can confirm your registration.']);
        }

        $registrationOpen = Cohort::acceptingRegistration()->exists();
        if (! $registrationOpen) {
            return back()
                ->withInput($request->only('name', 'phone', 'email', 'cohort_id', 'instrument_interest', 'message'))
                ->with('error', 'Registration is currently closed. Please check back for the next intake.');
        }

        $status = 'applied';
        $cohort = null;
        if (! empty($data['cohort_id'])) {
            $cohort = Cohort::withCount('members')->find($data['cohort_id']);
            if ($cohort && ! $cohort->isAcceptingRegistration()) {
                return back()
                    ->withInput($request->only('name', 'phone', 'email', 'cohort_id', 'instrument_interest', 'message'))
                    ->with('error', 'That cohort is not accepting registrations. Please choose another or wait for the next intake.');
            }
            if ($cohort && ! $cohort->hasSpots()) {
                $status = 'waitlist';
            }
        }

        Member::create([
            'name' => trim($data['name']),
            'phone' => trim($data['phone'] ?? '') ?: null,
            'email' => trim($data['email'] ?? '') ?: null,
            'cohort_id' => $data['cohort_id'] ?? null,
            'instrument_interest' => $data['instrument_interest'] ?? null,
            'notes' => $data['message'] ?? null,
            'status' => $status,
        ]);

        Cache::forget('website.register_cohorts');
        return redirect()->route('register.thankyou');
    }
}
