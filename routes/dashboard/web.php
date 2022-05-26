<?php
use Illuminate\Support\Facades\Route;
Route::group(
    ['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){

//    'middleware' => ['role:admin']],
    Route::prefix('dashboard')->name('dashboard.')->middleware(['role:admin'])->group( function () {
        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index']);
        Route::resource('/users', UserController::class);
        Route::resource('/civilian',CivilianController::class);
    });
});

