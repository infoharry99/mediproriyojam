<?php

namespace App\Http\Controllers;

use App\Models\StudentFeedbackVideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentFeedbackVideoController extends Controller
{
    public function index()
    {
        $videos = StudentFeedbackVideo::orderBy('display_order')->get();
        return view('admin.student-feedback-videos.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'nullable|string|max:150',
            'video_url' => 'nullable|string|max:500',
            'course_name' => 'nullable|string|max:150',
            'exam_year' => 'nullable|integer|min:2000|max:2100',
            'display_order' => 'nullable|integer',
            'thumbnail_image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        $thumbnailPath = null;

        if ($request->hasFile('thumbnail_image')) {
            $name = time().'_'.uniqid().'.'.$request->thumbnail_image->extension();
            $request->thumbnail_image->move(public_path('uploads/feedback'), $name);
            $thumbnailPath = 'uploads/feedback/'.$name;
        }

        StudentFeedbackVideo::create([
            'student_name' => $request->student_name,
            'video_url' => $request->video_url,
            'course_name' => $request->course_name,
            'exam_year' => $request->exam_year,
            'display_order' => $request->display_order ?? 0,
            'thumbnail_image' => $thumbnailPath,
            'status' => 'active',
        ]);

        return back()->with('success', 'Feedback video added successfully');
    }

    public function update(Request $request, $id)
    {
        $video = StudentFeedbackVideo::findOrFail($id);

        $request->validate([
            'student_name' => 'nullable|string|max:150',
            'video_url' => 'nullable|string|max:500',
            'course_name' => 'nullable|string|max:150',
            'exam_year' => 'nullable|integer|min:2000|max:2100',
            'display_order' => 'nullable|integer',
            'status' => 'required|in:active,inactive',
            'thumbnail_image' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        if ($request->hasFile('thumbnail_image')) {
            if ($video->thumbnail_image && File::exists(public_path($video->thumbnail_image))) {
                File::delete(public_path($video->thumbnail_image));
            }

            $name = time().'_'.uniqid().'.'.$request->thumbnail_image->extension();
            $request->thumbnail_image->move(public_path('uploads/feedback'), $name);
            $video->thumbnail_image = 'uploads/feedback/'.$name;
        }

        $video->update([
            'student_name' => $request->student_name,
            'video_url' => $request->video_url,
            'course_name' => $request->course_name,
            'exam_year' => $request->exam_year,
            'display_order' => $request->display_order,
            'status' => $request->status,
        ]);

        return back()->with('success', 'Feedback video updated successfully');
    }

    public function destroy($id)
    {
        $video = StudentFeedbackVideo::findOrFail($id);

        if ($video->thumbnail_image && File::exists(public_path($video->thumbnail_image))) {
            File::delete(public_path($video->thumbnail_image));
        }

        $video->delete();

        return back()->with('success', 'Feedback video deleted successfully');
    }
}
