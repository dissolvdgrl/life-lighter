<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\FormsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home');

Route::controller(PagesController::class)->group(function () {
    Route::get('/blog', 'posts')->name('blog');
    Route::get('/blog/{slug}', 'post');
    Route::get('/tags/{slug}', 'tag');
});

Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact-form', [FormsController::class, 'contact_form']);
Route::view('/privacy-policy', 'privacy');

Route::view('/test', 'mail.contact');
