<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->get();
        return view('admin.courses.index', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:100',
            'description' => 'nullable|string',

            'image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'instructor_image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',

            'instructor_name' => 'required|string|max:150',

            'original_price' => 'nullable|numeric',
            'discounted_price' => 'required|numeric',

            'rating' => 'nullable|numeric|min:0|max:5',
            'total_reviews' => 'nullable|integer',

            'total_lessons' => 'nullable|integer',
            'total_duration' => 'nullable|string|max:50',
            'total_students' => 'nullable|integer',
        ]);

        $courseImage = null;
        $instructorImage = null;

        if ($request->hasFile('image')) {
            $name = time().'_course.'.$request->image->extension();
            $request->image->move(public_path('uploads/courses'), $name);
            $courseImage = 'uploads/courses/'.$name;
        }

        if ($request->hasFile('instructor_image')) {
            $name = time().'_instructor.'.$request->instructor_image->extension();
            $request->instructor_image->move(public_path('uploads/courses'), $name);
            $instructorImage = 'uploads/courses/'.$name;
        }

        Course::create([
            'title' => $request->title,
            'category' => $request->category ?? 'NEET',
            'description' => $request->description,
            'image' => $courseImage,
            'instructor_name' => $request->instructor_name,
            'instructor_image' => $instructorImage,
            'original_price' => $request->original_price,
            'discounted_price' => $request->discounted_price,
            'rating' => $request->rating ?? 0,
            'total_reviews' => $request->total_reviews ?? 0,
            'total_lessons' => $request->total_lessons ?? 0,
            'total_duration' => $request->total_duration,
            'total_students' => $request->total_students ?? 0,
            'status' => 'active',
        ]);

        return back()->with('success', 'Course added successfully');
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'instructor_name' => 'required|string|max:150',
            'discounted_price' => 'required|numeric',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('image')) {
            if ($course->image && File::exists(public_path($course->image))) {
                File::delete(public_path($course->image));
            }

            $name = time().'_course.'.$request->image->extension();
            $request->image->move(public_path('uploads/courses'), $name);
            $course->image = 'uploads/courses/'.$name;
        }

        if ($request->hasFile('instructor_image')) {
            if ($course->instructor_image && File::exists(public_path($course->instructor_image))) {
                File::delete(public_path($course->instructor_image));
            }

            $name = time().'_instructor.'.$request->instructor_image->extension();
            $request->instructor_image->move(public_path('uploads/courses'), $name);
            $course->instructor_image = 'uploads/courses/'.$name;
        }

        $course->update($request->except(['image','instructor_image']));

        return back()->with('success', 'Course updated successfully');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        if ($course->image && File::exists(public_path($course->image))) {
            File::delete(public_path($course->image));
        }

        if ($course->instructor_image && File::exists(public_path($course->instructor_image))) {
            File::delete(public_path($course->instructor_image));
        }

        $course->delete();

        return back()->with('success', 'Course deleted');
    }
}
