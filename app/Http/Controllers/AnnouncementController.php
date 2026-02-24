<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::orderBy('sort_order')->get();
        return view('admin.announcements.index', compact('announcements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        Announcement::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'date' => $request->date,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->is_active ? 1 : 0,
        ]);

        return back()->with('success', 'Announcement added successfully');
    }

    public function update(Request $request, $id)
    {
        $announcement = Announcement::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'sort_order' => 'nullable|integer',
            'is_active' => 'nullable|boolean',
        ]);

        $announcement->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'date' => $request->date,
            'sort_order' => $request->sort_order,
            'is_active' => $request->is_active ? 1 : 0,
        ]);

        return back()->with('success', 'Announcement updated successfully');
    }

    public function destroy($id)
    {
        Announcement::findOrFail($id)->delete();

        return back()->with('success', 'Announcement deleted successfully');
    }
}