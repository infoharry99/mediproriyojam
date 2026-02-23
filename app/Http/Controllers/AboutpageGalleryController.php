<?php

namespace App\Http\Controllers;

use App\Models\AboutpageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutpageGalleryController extends Controller
{
    public function index()
    {
        $galleries = AboutpageGallery::orderBy('sort_order')->get();
        return view('admin.aboutpage-gallery.index', compact('galleries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
            'title' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        $name = time().'_'.uniqid().'.'.$request->image->extension();
        $request->image->move(public_path('uploads/about-gallery'), $name);

        AboutpageGallery::create([
            'image' => 'uploads/about-gallery/'.$name,
            'title' => $request->title,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return back()->with('success', 'Image added successfully');
    }

    public function update(Request $request, $id)
    {
        $gallery = AboutpageGallery::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
            'title' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {

            if ($gallery->image && File::exists(public_path($gallery->image))) {
                File::delete(public_path($gallery->image));
            }

            $name = time().'_'.uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/about-gallery'), $name);

            $gallery->image = 'uploads/about-gallery/'.$name;
        }

        $gallery->update([
            'title' => $request->title,
            'sort_order' => $request->sort_order,
        ]);

        return back()->with('success', 'Gallery updated successfully');
    }

    public function destroy($id)
    {
        $gallery = AboutpageGallery::findOrFail($id);

        if ($gallery->image && File::exists(public_path($gallery->image))) {
            File::delete(public_path($gallery->image));
        }

        $gallery->delete();

        return back()->with('success', 'Gallery deleted successfully');
    }
}