<?php

namespace App\Http\Controllers;

use App\Models\AppDownload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AppDownloadController extends Controller
{
    public function index()
    {
        $app = AppDownload::first();
        return view('admin.app-download.index', compact('app'));
    }

    public function save(Request $request)
    {
        $app = AppDownload::first();

        $request->validate([
            'app_name' => 'nullable|string|max:150',
            'android_link' => 'nullable|url|max:500',
            'ios_link' => 'nullable|url|max:500',
            'status' => 'required|in:active,inactive',
            'qr_android' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
            'qr_ios' => 'nullable|mimes:jpg,jpeg,png,webp,avif|max:2048',
        ]);

        $qrAndroidPath = $app->qr_android ?? null;
        $qrIosPath = $app->qr_ios ?? null;

        // Android QR Upload
        if ($request->hasFile('qr_android')) {
            if ($app && $app->qr_android && File::exists(public_path($app->qr_android))) {
                File::delete(public_path($app->qr_android));
            }

            $name = time().'_android.'.$request->qr_android->extension();
            $request->qr_android->move(public_path('uploads/app'), $name);
            $qrAndroidPath = 'uploads/app/'.$name;
        }

        // iOS QR Upload
        if ($request->hasFile('qr_ios')) {
            if ($app && $app->qr_ios && File::exists(public_path($app->qr_ios))) {
                File::delete(public_path($app->qr_ios));
            }

            $name = time().'_ios.'.$request->qr_ios->extension();
            $request->qr_ios->move(public_path('uploads/app'), $name);
            $qrIosPath = 'uploads/app/'.$name;
        }

        AppDownload::updateOrCreate(
            ['id' => $app->id ?? null],
            [
                'app_name' => $request->app_name,
                'android_link' => $request->android_link,
                'ios_link' => $request->ios_link,
                'qr_android' => $qrAndroidPath,
                'qr_ios' => $qrIosPath,
                'status' => $request->status,
            ]
        );

        return back()->with('success', 'App download section saved successfully');
    }
}
