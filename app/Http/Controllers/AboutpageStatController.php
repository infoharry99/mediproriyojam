<?php

namespace App\Http\Controllers;

use App\Models\AboutpageStat;
use Illuminate\Http\Request;

class AboutpageStatController extends Controller
{
    public function index()
    {
        $stats = AboutpageStat::orderBy('sort_order')->get();
        return view('admin.aboutpage-stats.index', compact('stats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'nullable|string|max:100',
            'label' => 'nullable|string|max:255',
            'badge_enabled' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        AboutpageStat::create([
            'number' => $request->number,
            'label' => $request->label,
            'badge_enabled' => $request->badge_enabled ? 1 : 0,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return back()->with('success', 'Stat added successfully');
    }

    public function update(Request $request, $id)
    {
        $stat = AboutpageStat::findOrFail($id);

        $request->validate([
            'number' => 'nullable|string|max:100',
            'label' => 'nullable|string|max:255',
            'badge_enabled' => 'nullable|boolean',
            'sort_order' => 'nullable|integer',
        ]);

        $stat->update([
            'number' => $request->number,
            'label' => $request->label,
            'badge_enabled' => $request->badge_enabled ? 1 : 0,
            'sort_order' => $request->sort_order,
        ]);

        return back()->with('success', 'Stat updated successfully');
    }

    public function destroy($id)
    {
        AboutpageStat::findOrFail($id)->delete();

        return back()->with('success', 'Stat deleted successfully');
    }
}