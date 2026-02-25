<?php

namespace App\Http\Controllers;

use App\Models\AdmissionEnquiry;
use App\Models\Announcement;
use App\Models\BlogPost;
use App\Models\TopRanker;
use App\Models\User;
use App\Models\Banner;
use App\Models\Course;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [

            // stats cards
            'totalEnquiries' => AdmissionEnquiry::count(),
            'newEnquiries'   => AdmissionEnquiry::new()->count(),

            'totalBlogs'     => BlogPost::count(),
            'publishedBlogs' => BlogPost::published()->count(),

            'totalCourses'   => Course::count(),
            'totalStudents'  => Course::sum('total_students'),

            'totalUsers'     => User::count(),
            'totalRankers'   => TopRanker::active()->count(),

            'totalAnnouncements' => Announcement::where('is_active', true)->count(),
            'totalBanners'       => Banner::count(),

            // latest lists (optional widgets)
            'latestEnquiries' => AdmissionEnquiry::latest()->limit(5)->get(),
            'latestBlogs'     => BlogPost::latest()->limit(5)->get(),
        ]);
    }
}