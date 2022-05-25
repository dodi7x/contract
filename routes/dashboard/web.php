<?php
use Illuminate\Support\Facades\Route;
Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

    Route::prefix('dashboard')->name('dashboard.')->middleware(['auth'])->group( function () {
        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index']);
        Route::resource('/users', UserController::class);
        Route::resource('/civilian',CivilianController::class);
    });
});

