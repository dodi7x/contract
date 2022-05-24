<?php
use Illuminate\Support\Facades\Route;
Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

    Route::prefix('dashboard')->name('dashboard.')->group( function () {
        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index']);
        Route::resource('/users', UserController::class);
    });
});

