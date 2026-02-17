<?php

namespace App\Http\Controllers;

use App\Models\CourseHighlight;
use Illuminate\Http\Request;

class CourseHighlightController extends Controller
{
    public function index()
    {
        $highlights = CourseHighlight::orderBy('display_order')->get();
        return view('admin.course-highlights.index', compact('highlights'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'highlight_text' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:100',
            'display_order' => 'nullable|integer',
        ]);

        CourseHighlight::create([
            'highlight_text' => $request->highlight_text,
            'icon' => $request->icon ?? 'check',
            'display_order' => $request->display_order ?? 0,
            'status' => 'active',
        ]);

        return back()->with('success', 'Highlight added successfully');
    }

    public function update(Request $request, $id)
    {
        $highlight = CourseHighlight::findOrFail($id);

        $request->validate([
            'highlight_text' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:100',
            'display_order' => 'nullable|integer',
            'status' => 'required|in:active,inactive',
        ]);

        $highlight->update([
            'highlight_text' => $request->highlight_text,
            'icon' => $request->icon ?? 'check',
            'display_order' => $request->display_order,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Highlight updated successfully');
    }

    public function destroy($id)
    {
        CourseHighlight::findOrFail($id)->delete();

        return back()->with('success', 'Highlight deleted successfully');
    }
}
