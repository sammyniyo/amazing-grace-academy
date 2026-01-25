<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Cohort;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::with('cohort')->latest()->paginate(15);
        $cohorts = Cohort::orderBy('start_date', 'desc')->get();
        return view('admin.members.index', compact('members', 'cohorts'));
    }

    public function update(Request $request, Member $member)
    {
        $data = $request->validate([
            'status' => 'required|string|max:50',
            'cohort_id' => 'nullable|exists:cohorts,id',
            'notes' => 'nullable|string',
        ]);

        $member->update($data);

        return redirect()->route('admin.members.index')->with('success', 'Member updated.');
    }

    public function destroy(Member $member)
    {
        $member->delete();
        return redirect()->route('admin.members.index')->with('success', 'Member deleted.');
    }
}
