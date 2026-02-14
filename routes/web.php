<?php

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

Route::get('/', function () {
    return view('home');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/course', function () {
    return view('course');
});
Route::get('/target', function () {
    return view('target');
});
Route::get('/foundation', function () {
    return view('foundation');
});
Route::get('/innerblog', function () {
    return view('innerblog');
});
Route::get('/contact', function () {
    return view('contact');
});
