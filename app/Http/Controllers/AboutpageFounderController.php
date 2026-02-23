<?php

namespace App\Http\Controllers;

use App\Models\AboutpageFounder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutpageFounderController extends Controller
{
    public function index()
    {
        $founder = AboutpageFounder::first();
        return view('admin.aboutpage-founder.index', compact('founder'));
    }

    public function save(Request $request)
    {
        $founder = AboutpageFounder::first();

        $request->validate([
            'content' => 'nullable|string',
            'name' => 'nullable|string|max:255',
            'role' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png,webp,avif|max:4096',
        ]);

        $imagePath = $founder->image ?? null;
        $avatarPath = $founder->avatar ?? null;

        // Founder main image
        if ($request->hasFile('image')) {
            if ($founder && $founder->image && File::exists(public_path($founder->image))) {
                File::delete(public_path($founder->image));
            }

            $name = time().'_founder.'.$request->image->extension();
            $request->image->move(public_path('uploads/about'), $name);
            $imagePath = 'uploads/about/'.$name;
        }

        // Avatar image
        if ($request->hasFile('avatar')) {
            if ($founder && $founder->avatar && File::exists(public_path($founder->avatar))) {
                File::delete(public_path($founder->avatar));
            }

            $name = time().'_avatar.'.$request->avatar->extension();
            $request->avatar->move(public_path('uploads/about'), $name);
            $avatarPath = 'uploads/about/'.$name;
        }

        AboutpageFounder::updateOrCreate(
            ['id' => $founder->id ?? null],
            [
                'content' => $request->content,
                'name' => $request->name,
                'role' => $request->role,
                'image' => $imagePath,
                'avatar' => $avatarPath,
            ]
        );

        return back()->with('success', 'Founder section saved successfully');
    }
}