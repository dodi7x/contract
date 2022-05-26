<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Lawdatacontroller;
use App\Http\Controllers\ModeContractController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CiviController;
use App\Http\Controllers\contractController;

use App\Models\Civi;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Home', function () {
    return view('Home');
});

//Route::get('system', function () {
////    return 'welcome';
//    return view('dashboard.index');
//});
//Route::get('/dashboard', function () {
// return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

//Route::group(['middleware' => ['auth']], function () {
//    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
//});

// for Lywer
Route::group(['middleware' => ['auth', 'role:Lawyer']], function () {
    Route::get('/dashboard/myprofile', [DashboardController::class, 'myprofile'])->name('dashboard.profile');
});

Route::group(['middleware' => ['auth', 'role:user']], function () {
    Route::get('/home', [DashboardController::class, 'myprofile'])->name('dashboard.profile');
});
require __DIR__ . '/auth.php';

// Route for contract




//Route::group(['dodi'=> 'Civi'], function (){//});
//Route::resource('/ff', ModeContractController::class,'/ff');

Route::resource('/ff', ModeContractController::class);

Route::get('create', [CiviController::class, 'index']);
Route::post('create', [CiviController::class, 'store']);

Route::get('profile', [ProfileController::class, 'index'])->name('profile');

Route::post('profile/edit_validation', [ProfileController::class, 'edit_validation'])->name('profile.edit_validation');

Route::get('type', [contractController::class, 'index'])->name('type');

Route::post('type/store', [contractController::class, 'store'])->name('type.store');
