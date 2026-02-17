<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::orderBy('display_order')->get();
        return view('admin.achievements.index', compact('achievements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:150',
            'year' => 'nullable|integer|min:2000|max:2100',
            'description' => 'nullable|string',
            'display_order' => 'nullable|integer',
            'badge_image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('badge_image')) {
            $name = time().'_'.uniqid().'.'.$request->badge_image->extension();
            $request->badge_image->move(public_path('uploads/achievements'), $name);
            $imagePath = 'uploads/achievements/'.$name;
        }

        Achievement::create([
            'title' => $request->title,
            'year' => $request->year,
            'description' => $request->description,
            'display_order' => $request->display_order ?? 0,
            'badge_image' => $imagePath,
            'status' => 'active',
        ]);

        return back()->with('success', 'Achievement added successfully');
    }

    public function update(Request $request, $id)
    {
        $achievement = Achievement::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:150',
            'year' => 'nullable|integer|min:2000|max:2100',
            'description' => 'nullable|string',
            'display_order' => 'nullable|integer',
            'status' => 'required|in:active,inactive',
            'badge_image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        if ($request->hasFile('badge_image')) {
            if ($achievement->badge_image && File::exists(public_path($achievement->badge_image))) {
                File::delete(public_path($achievement->badge_image));
            }

            $name = time().'_'.uniqid().'.'.$request->badge_image->extension();
            $request->badge_image->move(public_path('uploads/achievements'), $name);
            $achievement->badge_image = 'uploads/achievements/'.$name;
        }

        $achievement->update([
            'title' => $request->title,
            'year' => $request->year,
            'description' => $request->description,
            'display_order' => $request->display_order,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Achievement updated successfully');
    }

    public function destroy($id)
    {
        $achievement = Achievement::findOrFail($id);

        if ($achievement->badge_image && File::exists(public_path($achievement->badge_image))) {
            File::delete(public_path($achievement->badge_image));
        }

        $achievement->delete();

        return back()->with('success', 'Achievement deleted successfully');
    }
}
