<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contactUs');
Route::post('/contact-us/store', [ContactUsController::class, 'store'])->name('contact-us.store');
Route::get('/portfolio/{slug}', [WebsiteController::class, 'show'])->name('portfolio.show');
Route::get('/news/{slug}', [WebsiteController::class, 'newsShow'])->name('blog.show');
Route::get('/page/{slug}', [WebsiteController::class, 'pageShow'])->name('page.show');
Route::get('/event/{slug}', [WebsiteController::class, 'eventShow'])->name('event.show');
Route::get('/blogs/all-blogs', [WebsiteController::class, 'blogs'])->name('blog.index');

Route::get('/portfolios/all-portfolios', [WebsiteController::class, 'abc'])->name('abc.index');


require (base_path('routes/admin.php'));


