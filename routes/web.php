<?php

use App\Http\Controllers\AboutpageFeatureController;
use App\Http\Controllers\AboutpageFounderController;
use App\Http\Controllers\AboutpageGalleryController;
use App\Http\Controllers\AboutpageIntroController;
use App\Http\Controllers\AboutpageStatController;
use App\Http\Controllers\AboutStatisticController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdmissionEnquiryController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AnnouncementPosterController;
use App\Http\Controllers\AppDownloadController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseDescriptionController;
use App\Http\Controllers\CourseHighlightController;
use App\Http\Controllers\StudentFeedbackVideoController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TestTypeController;
use App\Http\Controllers\TopRankerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ScholarshipController;
use App\Models\AboutpageFeature;
use App\Models\AboutpageFounder;
use App\Models\AboutpageGallery;
use App\Models\AboutpageIntro;
use App\Models\AboutpageStat;
use App\Models\Announcement;
use App\Models\AnnouncementPoster;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index']);

Route::post('/scholarship-submit', [ScholarshipController::class, 'store'])->name('scholarship.store');

Route::get('/scholarship-list', [ScholarshipController::class, 'index'])->name('scholarship.list');

Route::get('/course', function () {
    return view('course');
});
Route::get('/target', function () {
    return view('target');
});
Route::get('/foundation', function () {
    return view('foundation');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/profile', function () {
    return view('profile');
});

// Route::get('/gallery', function () {
//     return view('gallery');
// });
Route::get('/gallery', function () {
    $galleries = AboutpageGallery::orderBy('sort_order')->get();
    return view('gallery', compact('galleries'));
})->name('gallery.page');

//About Uss


Route::get('/about-us', function () {
    $about_intro = AboutpageIntro::latest()->get();
    $about_founder = AboutpageFounder::latest()->get();
    $stats =AboutpageStat::latest()->get();
    $galleries = AboutpageGallery::latest()->get();
    $features = AboutpageFeature::latest()->get();
    return view('aboutus', compact('about_intro', 'about_founder', 'stats', 'galleries', 'features'));
});

Route::get('/announcements', function () {
    $announcements = Announcement::latest()->get();
    $announcement_poster = AnnouncementPoster::latest()->first();
    return view('announcement', compact('announcements', 'announcement_poster'));
});


Route::post('/admission-enquiry', [AdmissionEnquiryController::class, 'store'])
    ->name('admission.enquiry.store');
    // Route::post('/admission-enquiry', [AdmissionEnquiryController::class, 'store'])
    // ->name('admission.enquiry.store');

// Blog Listing
Route::get('/blog', [BlogPostController::class, 'publicIndex'])->name('blog.index');

// Blog Details
Route::get('/blog/{slug}', [BlogPostController::class, 'show'])->name('blog.show');
Route::get('/admin-register', [AuthController::class, 'showRegister'])->name('admin.register');
Route::post('/admin-register', [AuthController::class, 'register'])->name('admin.register.store');

Route::get('/admin-login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin-login', [AuthController::class, 'login'])->name('admin.login.check');

Route::post('/admin-logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class,'index'])
        ->name('dashboard');

    Route::get('/banners', [BannerController::class, 'index'])
        ->name('banners.index');

    Route::post('/banners', [BannerController::class, 'store'])
        ->name('banners.store');

    Route::put('/banners/{id}', [BannerController::class, 'update'])
        ->name('banners.update');

    Route::delete('/banners/{id}', [BannerController::class, 'destroy'])
        ->name('banners.destroy');

    Route::get('/about-us', [AboutUsController::class, 'index'])
        ->name('about.index');

    Route::post('/about-us', [AboutUsController::class, 'save'])
        ->name('about.save'); 
        
    Route::get('/about-statistics', [AboutStatisticController::class, 'index'])
        ->name('about.statistics.index');

    Route::post('/about-statistics', [AboutStatisticController::class, 'store'])
        ->name('about.statistics.store');

    Route::put('/about-statistics/{id}', [AboutStatisticController::class, 'update'])
        ->name('about.statistics.update');

    Route::delete('/about-statistics/{id}', [AboutStatisticController::class, 'destroy'])
        ->name('about.statistics.destroy');  
        
        
    
    Route::get('/courses', [CourseController::class, 'index'])
        ->name('courses.index');

    Route::post('/courses', [CourseController::class, 'store'])
        ->name('courses.store');

    Route::put('/courses/{id}', [CourseController::class, 'update'])
        ->name('courses.update');

    Route::delete('/courses/{id}', [CourseController::class, 'destroy'])
        ->name('courses.destroy');
    
    Route::get('/top-rankers', [TopRankerController::class, 'index'])
        ->name('top.rankers.index');

    Route::post('/top-rankers', [TopRankerController::class, 'store'])
        ->name('top.rankers.store');

    Route::put('/top-rankers/{id}', [TopRankerController::class, 'update'])
        ->name('top.rankers.update');

    Route::delete('/top-rankers/{id}', [TopRankerController::class, 'destroy'])
        ->name('top.rankers.destroy'); 
        
     Route::get('/testimonials', [TestimonialController::class, 'index'])
        ->name('testimonials.index');

    Route::post('/testimonials', [TestimonialController::class, 'store'])
        ->name('testimonials.store');

    Route::put('/testimonials/{id}', [TestimonialController::class, 'update'])
        ->name('testimonials.update');

    Route::delete('/testimonials/{id}', [TestimonialController::class, 'destroy'])
        ->name('testimonials.destroy');
    
        Route::get('/student-feedback-videos', [StudentFeedbackVideoController::class, 'index'])
        ->name('feedback.videos.index');

    Route::post('/student-feedback-videos', [StudentFeedbackVideoController::class, 'store'])
        ->name('feedback.videos.store');

    Route::put('/student-feedback-videos/{id}', [StudentFeedbackVideoController::class, 'update'])
        ->name('feedback.videos.update');

    Route::delete('/student-feedback-videos/{id}', [StudentFeedbackVideoController::class, 'destroy'])
        ->name('feedback.videos.destroy');

      Route::get('/blogs', [BlogPostController::class, 'index'])
        ->name('blogs.index');

    Route::post('/blogs', [BlogPostController::class, 'store'])
        ->name('blogs.store');

    Route::put('/blogs/{id}', [BlogPostController::class, 'update'])
        ->name('blogs.update');

    Route::delete('/blogs/{id}', [BlogPostController::class, 'destroy'])
        ->name('blogs.destroy'); 
    
     
    Route::get('/admission-enquiries', [AdmissionEnquiryController::class, 'index'])
        ->name('admission.enquiries.index');

    Route::put('/admission-enquiries/{id}/status', [AdmissionEnquiryController::class, 'updateStatus'])
        ->name('admission.enquiries.updateStatus');

    Route::delete('/admission-enquiries/{id}', [AdmissionEnquiryController::class, 'destroy'])
        ->name('admission.enquiries.destroy'); 
        
    Route::get('/app-download', [AppDownloadController::class, 'index'])
        ->name('app.download.index');

    Route::post('/app-download', [AppDownloadController::class, 'save'])
        ->name('app.download.save');  
        
    Route::get('/achievements', [AchievementController::class, 'index'])
        ->name('achievements.index');

    Route::post('/achievements', [AchievementController::class, 'store'])
        ->name('achievements.store');

    Route::put('/achievements/{id}', [AchievementController::class, 'update'])
        ->name('achievements.update');

    Route::delete('/achievements/{id}', [AchievementController::class, 'destroy'])
        ->name('achievements.destroy');  
        
      Route::get('/course-highlights', [CourseHighlightController::class, 'index'])
        ->name('course.highlights.index');

    Route::post('/course-highlights', [CourseHighlightController::class, 'store'])
        ->name('course.highlights.store');

    Route::put('/course-highlights/{id}', [CourseHighlightController::class, 'update'])
        ->name('course.highlights.update');

    Route::delete('/course-highlights/{id}', [CourseHighlightController::class, 'destroy'])
        ->name('course.highlights.destroy'); 
        
      Route::get('/course-description', [CourseDescriptionController::class, 'index'])
        ->name('course.description.index');

    Route::post('/course-description', [CourseDescriptionController::class, 'save'])
        ->name('course.description.save'); 
        
     Route::get('/test-types', [TestTypeController::class, 'index'])
        ->name('test.types.index');

    Route::post('/test-types', [TestTypeController::class, 'store'])
        ->name('test.types.store');

    Route::put('/test-types/{id}', [TestTypeController::class, 'update'])
        ->name('test.types.update');

    Route::delete('/test-types/{id}', [TestTypeController::class, 'destroy'])
        ->name('test.types.destroy'); 
        
    Route::get('/about-intro', [AboutpageIntroController::class, 'index'])
        ->name('about.intro.index');

    Route::post('/about-intro', [AboutpageIntroController::class, 'save'])
        ->name('about.intro.save');  
    
    Route::get('/about-founder', [AboutpageFounderController::class, 'index'])
        ->name('about.founder.index');

    Route::post('/about-founder', [AboutpageFounderController::class, 'save'])
        ->name('about.founder.save');    

       Route::get('/about-stats', [AboutpageStatController::class, 'index'])
        ->name('about.stats.index');

    Route::post('/about-stats', [AboutpageStatController::class, 'store'])
        ->name('about.stats.store');

    Route::put('/about-stats/{id}', [AboutpageStatController::class, 'update'])
        ->name('about.stats.update');

    Route::delete('/about-stats/{id}', [AboutpageStatController::class, 'destroy'])
        ->name('about.stats.destroy'); 
     
    Route::get('/about-gallery', [AboutpageGalleryController::class, 'index'])
        ->name('about.gallery.index');

    Route::post('/about-gallery', [AboutpageGalleryController::class, 'store'])
        ->name('about.gallery.store');

    Route::put('/about-gallery/{id}', [AboutpageGalleryController::class, 'update'])
        ->name('about.gallery.update');

    Route::delete('/about-gallery/{id}', [AboutpageGalleryController::class, 'destroy'])
        ->name('about.gallery.destroy');   
        
     Route::get('/about-features', [AboutpageFeatureController::class, 'index'])
        ->name('about.features.index');

    Route::post('/about-features', [AboutpageFeatureController::class, 'store'])
        ->name('about.features.store');

    Route::put('/about-features/{id}', [AboutpageFeatureController::class, 'update'])
        ->name('about.features.update');

    Route::delete('/about-features/{id}', [AboutpageFeatureController::class, 'destroy'])
        ->name('about.features.destroy');
     
    Route::get('/announcements', [AnnouncementController::class, 'index'])
        ->name('announcements.index');

    Route::post('/announcements', [AnnouncementController::class, 'store'])
        ->name('announcements.store');

    Route::put('/announcements/{id}', [AnnouncementController::class, 'update'])
        ->name('announcements.update');

    Route::delete('/announcements/{id}', [AnnouncementController::class, 'destroy'])
        ->name('announcements.destroy'); 
    
     Route::get('/announcement-poster', [AnnouncementPosterController::class, 'index'])
        ->name('announcement.poster.index');

    Route::post('/announcement-poster', [AnnouncementPosterController::class, 'save'])
        ->name('announcement.poster.save');    

});
