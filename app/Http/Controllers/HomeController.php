<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Banner;
use App\Models\AboutUs;
use App\Models\AboutStatistic;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        // $banners = Banner::where('status', 1)->latest()->get();
        $desktopBanners = Banner::where('is_mobile',0)->where('status',1)->get();
        $mobileBanners  = Banner::where('is_mobile',1)->where('status',1)->get();

    $testimonials = Testimonial::where('status','active')
                        ->orderBy('display_order')
                        ->get();   // 6 per page

  

        $about = AboutUs::first();

        $stats = AboutStatistic::latest()->get();

        return view('home', compact('desktopBanners', 'mobileBanners', 'about', 'stats', 'testimonials'));
    }
}
