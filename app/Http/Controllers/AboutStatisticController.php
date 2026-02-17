<?php

namespace App\Http\Controllers;

use App\Models\AboutStatistic;
use Illuminate\Http\Request;

class AboutStatisticController extends Controller
{
    public function index()
    {
        $stats = AboutStatistic::latest()->get();
        return view('admin.about-statistics.index', compact('stats'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'number' => 'nullable|string|max:255',
            'label'  => 'nullable|string|max:255',
        ]);

        AboutStatistic::create([
            'number' => $request->number,
            'label'  => $request->label,
        ]);

        return back()->with('success', 'Statistic added successfully');
    }

    public function update(Request $request, $id)
    {
        $stat = AboutStatistic::findOrFail($id);

        $request->validate([
            'number' => 'nullable|string|max:255',
            'label'  => 'nullable|string|max:255',
        ]);

        $stat->update([
            'number' => $request->number,
            'label'  => $request->label,
        ]);

        return back()->with('success', 'Statistic updated successfully');
    }

    public function destroy($id)
    {
        AboutStatistic::findOrFail($id)->delete();
        return back()->with('success', 'Statistic deleted successfully');
    }
}
