
<?php

use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\SliderSectionController;
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


    // Slider
    Route::get('/slider', [SliderSectionController::class, 'index'])->name('admin.slider');
    Route::get('/slider/create', [SliderSectionController::class, 'create'])->name('admin.slider.create');
    Route::post('/slider/store', [SliderSectionController::class, 'store'])->name('admin.slider.store');
    Route::get('/slider/edit/{id}', [SliderSectionController::class, 'edit'])->name('admin.slider.edit');
    Route::any('/slider/update/{id}', [SliderSectionController::class, 'update'])->name('admin.slider.update');
    Route::any('/slider/delete/{id}', [SliderSectionController::class, 'delete'])->name('admin.slider.delete');




});
