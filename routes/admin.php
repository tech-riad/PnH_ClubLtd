
<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\MemberSectionController;
use App\Http\Controllers\ServiceSectionController;
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
    Route::any('/schedule', [HomeSectionController::class, 'scheduleUpdate'])->name('admin.scheduleUpdate');

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


    // Service
    Route::get('/services', [ServiceSectionController::class, 'index'])->name('admin.services');
    Route::get('/services/create', [ServiceSectionController::class, 'create'])->name('admin.services.create');
    Route::post('/services/store', [ServiceSectionController::class, 'store'])->name('admin.services.store');
    Route::get('/services/edit/{id}', [ServiceSectionController::class, 'edit'])->name('admin.services.edit');
    Route::any('/services/update/{id}', [ServiceSectionController::class, 'update'])->name('admin.services.update');
    Route::any('/services/delete/{id}', [ServiceSectionController::class, 'delete'])->name('admin.services.delete');
  // About
  Route::get('/about', [AboutSectionController::class, 'index'])->name('admin.about');
  Route::get('/about/create', [AboutSectionController::class, 'create'])->name('admin.about.create');
  Route::post('/about/store', [AboutSectionController::class, 'store'])->name('admin.about.store');
  Route::get('/about/edit/{id}', [AboutSectionController::class, 'edit'])->name('admin.about.edit');
  Route::any('/about/update/{id}', [AboutSectionController::class, 'update'])->name('admin.about.update');
  Route::any('/about/delete/{id}', [AboutSectionController::class, 'delete'])->name('admin.about.delete');
//  Homesection About
  Route::any('/about/{id}', [HomeSectionController::class, 'aboutUpdate'])->name('admin.aboutUpdate');


  // Member
  Route::get('/memberinfo', [MemberSectionController::class, 'index'])->name('admin.memberinfo');
  Route::get('/memberinfo/create', [MemberSectionController::class, 'create'])->name('admin.memberinfo.create');
  Route::post('/memberinfo/store', [MemberSectionController::class, 'store'])->name('admin.memberinfo.store');
  Route::get('/memberinfo/edit/{id}', [MemberSectionController::class, 'edit'])->name('admin.memberinfo.edit');
  Route::any('/memberinfo/update/{id}', [MemberSectionController::class, 'update'])->name('admin.memberinfo.update');
  Route::any('/memberinfo/delete/{id}', [MemberSectionController::class, 'delete'])->name('admin.memberinfo.delete');
// Home section Member Route
  Route::any('/member', [HomeSectionController::class, 'memberUpdate'])->name('admin.memberUpdate');
});

