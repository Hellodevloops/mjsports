<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JerseyController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\BlogController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\BannerController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\TestimonialController;



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

Route::get('/jersey', function () {
    return view('jersey');
})->name('jersey');
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');

// to check if mailig is integrated or not
// Route::get('/test-mail', function () {
//     Mail::raw('This is a test email from Laravel!', function ($message) {
//         $message->to('24riyavaidya@gmail.com') // Change if needed
//                 ->subject('Test Email');
//     });

//     return 'Test email sent!';
// });
Route::get('/jerseys', [JerseyController::class, 'index'])->name('jerseys.index');
Route::get('/jerseys/create', [JerseyController::class, 'create'])->name('jerseys.create');
Route::post('/jerseys', [JerseyController::class, 'store'])->name('jerseys.store');
// Route::get('/order/download/{id}', [JerseyController::class, 'downloadPDF'])->name('order.download');
// Route::get('/download/pdf/{id}', [JerseyController::class, 'downloadPdf'])->name('download.pdf');
// Route::get('/jerseys/download/{id}', [JerseyController::class, 'downloadPdf'])->name('jerseys.download');
// Route::get('/download-jersey-pdf/{id}', [DownloadController::class, 'downloadJerseyPdf'])->name('download.jersey.pdf');

Route::get('/download-jersey-pdf/{id}', [JerseyController::class, 'downloadPdf'])->name('jersey.download');

// Home Page
// Route::get('/', [HomeController::class, 'index'])->name('home');


// // About Page
// Route::get('/about', [AboutController::class, 'index'])->name('about');

// // Contact Page
Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');

// Appointment

// Contact Page




// Testimonial Page
// Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');



// Blog Pages
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

