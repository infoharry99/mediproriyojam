<?php

namespace App\Http\Controllers;

use App\Models\AnnouncementPoster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AnnouncementPosterController extends Controller
{
    public function index()
    {
        $poster = AnnouncementPoster::first();
        return view('admin.announcement-poster.index', compact('poster'));
    }

    public function save(Request $request)
    {
        $poster = AnnouncementPoster::first();

        $request->validate([
            'poster' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
            'is_active' => 'nullable|boolean',
        ]);

        $posterPath = $poster->poster ?? null;

        if ($request->hasFile('poster')) {

            if ($poster && $poster->poster && File::exists(public_path($poster->poster))) {
                File::delete(public_path($poster->poster));
            }

            $name = time().'_poster.'.$request->poster->extension();
            $request->poster->move(public_path('uploads/announcement'), $name);

            $posterPath = 'uploads/announcement/'.$name;
        }

        AnnouncementPoster::updateOrCreate(
            ['id' => $poster->id ?? null],
            [
                'poster' => $posterPath,
                'is_active' => $request->is_active ? 1 : 0,
            ]
        );

        return back()->with('success', 'Poster saved successfully');
    }
}