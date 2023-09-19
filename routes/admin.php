
<?php

use App\Http\Controllers\HomeSectionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/page', [HomeSectionController::class, 'index'])->name('admin.homepage');

    Route::any('/metaupdate/{id}', [HomeSectionController::class, 'metaupdate'])->name('admin.metaupdate');
    Route::any('/service/{id}', [HomeSectionController::class, 'serviceupdate'])->name('admin.serviceupdate');
    Route::any('/about/{id}', [HomeSectionController::class, 'aboutUpdate'])->name('admin.aboutUpdate');


});
