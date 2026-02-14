<?php

namespace App\Http\Controllers;

use App\Models\TopRanker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TopRankerController extends Controller
{
    public function index()
    {
        $rankers = TopRanker::orderBy('display_order')->get();
        return view('admin.top-rankers.index', compact('rankers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:150',
            'badge_text' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'display_order' => 'nullable|integer',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $name = time().'_'.uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/rankers'), $name);
            $imagePath = 'uploads/rankers/'.$name;
        }

        TopRanker::create([
            'name' => $request->name,
            'badge_text' => $request->badge_text,
            'description' => $request->description,
            'display_order' => $request->display_order ?? 0,
            'image' => $imagePath,
            'status' => 'active',
        ]);

        return back()->with('success', 'Top Ranker added successfully');
    }

    public function update(Request $request, $id)
    {
        $ranker = TopRanker::findOrFail($id);

        $request->validate([
            'name' => 'nullable|string|max:150',
            'badge_text' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'display_order' => 'nullable|integer',
            'status' => 'required|in:active,inactive',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($ranker->image && File::exists(public_path($ranker->image))) {
                File::delete(public_path($ranker->image));
            }

            $name = time().'_'.uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/rankers'), $name);
            $ranker->image = 'uploads/rankers/'.$name;
        }

        $ranker->update([
            'name' => $request->name,
            'badge_text' => $request->badge_text,
            'description' => $request->description,
            'display_order' => $request->display_order,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Top Ranker updated successfully');
    }

    public function destroy($id)
    {
        $ranker = TopRanker::findOrFail($id);

        if ($ranker->image && File::exists(public_path($ranker->image))) {
            File::delete(public_path($ranker->image));
        }

        $ranker->delete();

        return back()->with('success', 'Top Ranker deleted successfully');
    }
}
