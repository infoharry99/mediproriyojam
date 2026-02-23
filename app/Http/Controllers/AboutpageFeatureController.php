<?php

namespace App\Http\Controllers;

use App\Models\AboutpageFeature;
use Illuminate\Http\Request;

class AboutpageFeatureController extends Controller
{
    public function index()
    {
        $features = AboutpageFeature::orderBy('sort_order')->get();
        return view('admin.aboutpage-features.index', compact('features'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        $path = null;

        if ($request->hasFile('icon')) {

            $file = $request->file('icon');

            $filename = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('uploads/about/features'), $filename);

            $path = 'uploads/about/features/'.$filename;
        }

        AboutpageFeature::create([
            'icon' => $path,
            'title' => $request->title,
            'description' => $request->description,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return back()->with('success', 'Feature added successfully');
    }

    public function update(Request $request, $id)
    {
        $feature = AboutpageFeature::findOrFail($id);

        $request->validate([
            'icon' => 'nullable|image|mimes:png,jpg,jpeg,svg,webp|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        $path = $feature->icon;

        if ($request->hasFile('icon')) {

            // delete old image
            if ($feature->icon && file_exists(public_path($feature->icon))) {
                unlink(public_path($feature->icon));
            }

            $file = $request->file('icon');
            $filename = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('uploads/about/features'), $filename);

            $path = 'uploads/about/features/'.$filename;
        }

        $feature->update([
            'icon' => $path,
            'title' => $request->title,
            'description' => $request->description,
            'sort_order' => $request->sort_order,
        ]);

        return back()->with('success', 'Feature updated successfully');
    }

    public function destroy($id)
    {
        AboutpageFeature::findOrFail($id)->delete();

        return back()->with('success', 'Feature deleted successfully');
    }
}