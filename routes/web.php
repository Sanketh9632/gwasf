<?php

use App\Http\Controllers\Front\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Frontend Routes

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('blog', [PostController::class, 'getAllNews'])->name('blog');

Route::get('blog/category/{category_id?}', [PostController::class, 'getAllNewsFilter'])->name('blog-filter');

Route::get('blog/{news_slug}', [PostController::class, 'getNewsInDetail'])->name('blog-detail');

Route::get('services/{slug}/{child_slug?}', [PostController::class, 'getServiceDetail'])->name('service-detail');

Route::get('contact-us', [PostController::class, 'contactUs'])->name('contact-us');

Route::get('careers', [PostController::class, 'careers'])->name('careers');

Route::post('contact', [PostController::class, 'postContact'])->name('contact');

Route::post('post-resume', [PostController::class, 'postResume'])->name('post-resume');

Route::get("sitemap.xml", function () {
    return \Illuminate\Support\Facades\Redirect::to('sitemap.xml');
});

// Route::get('academics/faculty', [PostController::class, 'getFaculty'])->name('faculty');

// Route::get('faculty/{team_slug}', [PostController::class, 'getTeamDetails'])->name('faculty-detail');

// Route::get('facility/{sub_slug}', [PostController::class, 'getFacilityDetail'])->name('facility-detail');

// Route::get('get-quote/{id?}', [PostController::class, 'getQuote'])->name('get-quote');

// Route::post('application', [PostController::class, 'postApplication'])->name('application');

// Route::get('testimonials', [PostController::class, 'testimonial'])->name('testimonials');

// Backend Routes

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';

Route::get('errorpage', [PostController::class, 'index'])->name('errorpage');

Route::get('{parent_slug?}/{sub_slug?}/{child_slug?}/{sub_child_slug?}',  [PostController::class, 'getDynamicContent'])->name('dynamicpage');
