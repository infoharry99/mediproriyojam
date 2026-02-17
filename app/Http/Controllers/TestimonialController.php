<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('display_order')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:150',
            'designation' => 'nullable|string|max:150',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'nullable|string',
            'display_order' => 'nullable|integer',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $name = time().'_'.uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/testimonials'), $name);
            $imagePath = 'uploads/testimonials/'.$name;
        }

        Testimonial::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'rating' => $request->rating,
            'message' => $request->message,
            'display_order' => $request->display_order ?? 0,
            'image' => $imagePath,
            'status' => 'active',
        ]);

        return back()->with('success', 'Testimonial added successfully');
    }

    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::findOrFail($id);

        $request->validate([
            'name' => 'nullable|string|max:150',
            'designation' => 'nullable|string|max:150',
            'rating' => 'required|integer|min:1|max:5',
            'message' => 'nullable|string',
            'display_order' => 'nullable|integer',
            'status' => 'required|in:active,inactive',
            'image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($testimonial->image && File::exists(public_path($testimonial->image))) {
                File::delete(public_path($testimonial->image));
            }

            $name = time().'_'.uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/testimonials'), $name);
            $testimonial->image = 'uploads/testimonials/'.$name;
        }

        $testimonial->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'rating' => $request->rating,
            'message' => $request->message,
            'display_order' => $request->display_order,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Testimonial updated successfully');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);

        if ($testimonial->image && File::exists(public_path($testimonial->image))) {
            File::delete(public_path($testimonial->image));
        }

        $testimonial->delete();

        return back()->with('success', 'Testimonial deleted successfully');
    }
}
