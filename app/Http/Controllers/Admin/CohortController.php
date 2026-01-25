<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cohort;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CohortController extends Controller
{
    public function index()
    {
        $cohorts = Cohort::latest()->paginate(10);
        return view('admin.cohorts.index', compact('cohorts'));
    }

    public function create()
    {
        return view('admin.cohorts.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|max:50',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'location' => 'nullable|string|max:255',
            'status' => 'required|string|max:50',
            'capacity' => 'required|integer|min:1',
            'description' => 'nullable|string',
        ]);

        $data['code'] = $data['code'] ?: Str::upper(Str::slug($data['name'] . '-' . now()->format('ymd')));

        Cohort::create($data);

        return redirect()->route('admin.cohorts.index')->with('success', 'Cohort created.');
    }

    public function edit(Cohort $cohort)
    {
        return view('admin.cohorts.edit', compact('cohort'));
    }

    public function update(Request $request, Cohort $cohort)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'location' => 'nullable|string|max:255',
            'status' => 'required|string|max:50',
            'capacity' => 'required|integer|min:1',
            'description' => 'nullable|string',
        ]);

        $cohort->update($data);

        return redirect()->route('admin.cohorts.index')->with('success', 'Cohort updated.');
    }

    public function destroy(Cohort $cohort)
    {
        $cohort->delete();
        return redirect()->route('admin.cohorts.index')->with('success', 'Cohort deleted.');
    }
}
