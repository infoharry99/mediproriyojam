<?php

namespace App\Http\Controllers;

use App\Models\AboutpageIntro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutpageIntroController extends Controller
{
    public function index()
    {
        $intro = AboutpageIntro::first();
        return view('admin.aboutpage-intro.index', compact('intro'));
    }

    public function save(Request $request)
    {
        $intro = AboutpageIntro::first();

        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
        ]);

        $bannerPath = $intro->banner_image ?? null;

        if ($request->hasFile('banner_image')) {

            // delete old
            if ($intro && $intro->banner_image && File::exists(public_path($intro->banner_image))) {
                File::delete(public_path($intro->banner_image));
            }

            $name = time().'_banner.'.$request->banner_image->extension();
            $request->banner_image->move(public_path('uploads/about'), $name);

            $bannerPath = 'uploads/about/'.$name;
        }

        AboutpageIntro::updateOrCreate(
            ['id' => $intro->id ?? null],
            [
                'title' => $request->title,
                'content' => $request->content,
                'banner_image' => $bannerPath,
            ]
        );

        return back()->with('success', 'About intro saved successfully');
    }
}