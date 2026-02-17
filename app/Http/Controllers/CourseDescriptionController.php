<?php

namespace App\Http\Controllers;

use App\Models\CourseDescription;
use Illuminate\Http\Request;

class CourseDescriptionController extends Controller
{
    public function index()
    {
        $description = CourseDescription::first();
        return view('admin.course-description.index', compact('description'));
    }

    public function save(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'short_label' => 'nullable|string|max:150',
            'description' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        CourseDescription::updateOrCreate(
            ['id' => 1], // Single record CMS
            [
                'title' => $request->title,
                'short_label' => $request->short_label,
                'description' => $request->description,
                'status' => $request->status,
            ]
        );

        return back()->with('success', 'Course description saved successfully');
    }
}
