<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        return view('admin.about-us.index', compact('about'));
    }

    public function save(Request $request)
    {
        $about = AboutUs::first();

        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'video' => 'nullable|mimetypes:video/mp4,video/quicktime|max:10240', // 10MB
        ]);

        $videoPath = $about->video_file ?? null;

        if ($request->hasFile('video')) {

            // Delete old video
            if ($about && $about->video_file && File::exists(public_path($about->video_file))) {
                File::delete(public_path($about->video_file));
            }

            $name = time().'_'.uniqid().'.'.$request->video->extension();
            $request->video->move(public_path('uploads/about'), $name);

            $videoPath = 'uploads/about/'.$name;
        }

        AboutUs::updateOrCreate(
            ['id' => $about->id ?? null],
            [
                'title' => $request->title,
                'description' => $request->description,
                'video_file' => $videoPath,
            ]
        );

        return back()->with('success', 'About section saved successfully');
    }
}
