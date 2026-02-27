<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;

class ScholarshipController extends Controller
{
    // Store Form Data
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'mobile_number' => 'required',
            'class' => 'required',
            'city' => 'required',
            'email' => 'required|email',
            'target_exam' => 'required'
        ]);

        Scholarship::create($request->all());

        return redirect()->back()->with('success', 'Form Submitted Successfully!');
    }

    // Show All Data
    public function index()
    {
        $data = Scholarship::latest()->get();
        return view('scholarship-list', compact('data'));
    }
}