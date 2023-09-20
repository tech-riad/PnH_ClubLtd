
<?php

use App\Http\Controllers\HomeSectionController;
use App\Models\HomePortfolioSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/page', [HomeSectionController::class, 'index'])->name('admin.homepage');

    Route::any('/metaupdate/{id}', [HomeSectionController::class, 'metaupdate'])->name('admin.metaupdate');
    Route::any('/service/{id}', [HomeSectionController::class, 'serviceupdate'])->name('admin.serviceupdate');
    Route::any('/about/{id}', [HomeSectionController::class, 'aboutUpdate'])->name('admin.aboutUpdate');
    Route::any('/schedule', [HomeSectionController::class, 'scheduleUpdate'])->name('admin.scheduleUpdate');
    Route::any('/member', [HomeSectionController::class, 'memberUpdate'])->name('admin.memberUpdate');
    Route::any('/portfolio', [HomeSectionController::class, 'portfolioUpdate'])->name('admin.portfolioUpdate');
    Route::any('/testimonial', [HomeSectionController::class, 'testimonialUpdate'])->name('admin.testimonialUpdate');
    Route::any('/blog', [HomeSectionController::class, 'blogUpdate'])->name('admin.blogUpdate');


});
