<?php

namespace App\Http\Controllers;

use App\Models\TestType;
use Illuminate\Http\Request;

class TestTypeController extends Controller
{
    public function index()
    {
        $testTypes = TestType::orderBy('display_order')->get();
        return view('admin.test-types.index', compact('testTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:150',
            'short_description' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:150',
            'display_order' => 'nullable|integer',
        ]);

        TestType::create([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'icon' => $request->icon,
            'display_order' => $request->display_order ?? 0,
            'status' => 'active',
        ]);

        return back()->with('success', 'Test Type added successfully');
    }

    public function update(Request $request, $id)
    {
        $testType = TestType::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:150',
            'short_description' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:150',
            'display_order' => 'nullable|integer',
            'status' => 'required|in:active,inactive',
        ]);

        $testType->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'icon' => $request->icon,
            'display_order' => $request->display_order,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Test Type updated successfully');
    }

    public function destroy($id)
    {
        TestType::findOrFail($id)->delete();

        return back()->with('success', 'Test Type deleted successfully');
    }
}
