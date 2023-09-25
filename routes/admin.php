
<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\BlogControllerController;
use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\IntroVideoController;
use App\Http\Controllers\MemberSectionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceSectionController;
use App\Http\Controllers\SliderSectionController;
use App\Http\Controllers\TestimonialController;
use App\Models\HomePortfolioSection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/page', [HomeSectionController::class, 'index'])->name('admin.homepage');
    Route::get('/setting', [GeneralSettingController::class, 'generalSetting'])->name('admin.setting');
    Route::any('/update-general-settings',[GeneralSettingController::class, 'update'])->name('admin.setting.update');


    Route::any('/metaupdate/{id}', [HomeSectionController::class, 'metaupdate'])->name('admin.metaupdate');
    Route::any('/service/{id}', [HomeSectionController::class, 'serviceupdate'])->name('admin.serviceupdate');
    Route::any('/schedule/{id}', [HomeSectionController::class, 'scheduleUpdate'])->name('admin.scheduleUpdate');
    Route::any('/contact-us-section/{id}', [HomeSectionController::class, 'contactUsUpdate'])->name('admin.contactUsUpdate');


    Route::any('/testimonial/{id}', [HomeSectionController::class, 'testimonialUpdate'])->name('admin.testimonialUpdate');
    Route::any('/blog/{id}', [HomeSectionController::class, 'blogUpdate'])->name('admin.blogUpdate');


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
  Route::any('/member/{id}', [HomeSectionController::class, 'memberUpdate'])->name('admin.memberUpdate');

  // IntroVideo

  Route::get('/introvideo', [IntroVideoController::class, 'index'])->name('admin.introvideo');
  Route::get('/introvideo/create', [IntroVideoController::class, 'create'])->name('admin.introvideo.create');
  Route::post('/introvideo/store', [IntroVideoController::class, 'store'])->name('admin.introvideo.store');
  Route::get('/introvideo/edit/{id}', [IntroVideoController::class, 'edit'])->name('admin.introvideo.edit');
  Route::any('/introvideo/update/{id}', [IntroVideoController::class, 'update'])->name('admin.introvideo.update');
  Route::any('/introvideo/delete/{id}', [IntroVideoController::class, 'delete'])->name('admin.introvideo.delete');


  // Testimonial

  Route::get('/testimonialsection', [TestimonialController::class, 'index'])->name('admin.testimonialsection');
  Route::get('/testimonialsection/create', [TestimonialController::class, 'create'])->name('admin.testimonialsection.create');
  Route::post('/testimonialsection/store', [TestimonialController::class, 'store'])->name('admin.testimonialsection.store');
  Route::get('/testimonialsection/edit/{id}', [TestimonialController::class, 'edit'])->name('admin.testimonialsection.edit');
  Route::any('/testimonialsection/update/{id}', [TestimonialController::class, 'update'])->name('admin.testimonialsection.update');
  Route::any('/testimonialsection/delete/{id}', [TestimonialController::class, 'delete'])->name('admin.testimonialsection.delete');

  // Blog

  Route::get('/blogsection', [BlogControllerController::class, 'index'])->name('admin.blogsection');
  Route::get('/blogsection/create', [BlogControllerController::class, 'create'])->name('admin.blogsection.create');
  Route::post('/blogsection/store', [BlogControllerController::class, 'store'])->name('admin.blogsection.store');
  Route::get('/blogsection/edit/{id}', [BlogControllerController::class, 'edit'])->name('admin.blogsection.edit');
  Route::any('/blogsection/update/{id}', [BlogControllerController::class, 'update'])->name('admin.blogsection.update');
  Route::any('/blogsection/delete/{id}', [BlogControllerController::class, 'delete'])->name('admin.blogsection.delete');

  Route::any('/blog/{id}', [HomeSectionController::class, 'blogUpdate'])->name('admin.blogUpdate');


  //Portfolio

  Route::get('/portfolios', [PortfolioController::class, 'index'])->name('admin.portfolios');
  Route::get('/portfolios/create', [PortfolioController::class, 'create'])->name('admin.portfolios.create');
  Route::post('/portfolios/store', [PortfolioController::class, 'store'])->name('admin.portfolios.store');
  Route::get('/portfolios/edit/{id}', [PortfolioController::class, 'edit'])->name('admin.portfolios.edit');
  Route::any('/portfolios/update/{id}', [PortfolioController::class, 'update'])->name('admin.portfolios.update');
  Route::any('/portfolios/delete/{id}', [PortfolioController::class, 'delete'])->name('admin.portfolios.delete');

  Route::any('/portfolio/{id}', [HomeSectionController::class, 'portfolioUpdate'])->name('admin.portfolioUpdate');


//   Page
//Portfolio

Route::get('/pages', [PageController::class, 'index'])->name('admin.pages');
Route::get('/pages/create', [PageController::class, 'create'])->name('admin.pages.create');
Route::post('/pages/store', [PageController::class, 'store'])->name('admin.pages.store');
Route::get('/pages/edit/{id}', [PageController::class, 'edit'])->name('admin.pages.edit');
Route::any('/pages/update/{id}', [PageController::class, 'update'])->name('admin.pages.update');
Route::any('/pages/delete/{id}', [PageController::class, 'delete'])->name('admin.pages.delete');


});

