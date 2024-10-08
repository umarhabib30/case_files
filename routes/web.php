<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminEntryController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserEntryController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::post('user/register', [UserController::class, 'register']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* ----------- Admin Routes ----------- */
Route::group(['prefix' => 'admin', 'middleware' => ['admin_auth']], function () {

    /*-------------- dashboard routes -------------*/
    Route::get('dashboard',             [AdminDashboardController::class, 'index']);
    Route::get('user/edit/{id}',        [AdminDashboardController::class, 'editUser']);
    Route::post('user/update',          [AdminDashboardController::class, 'updateUser']);
    Route::post('user/password/update', [AdminDashboardController::class, 'updatePassword']);
    Route::get('user/delete/{id}',      [AdminDashboardController::class, 'deleteUser']);

    /*-------------- Enties routes -------------*/
    Route::get('entries/index',         [AdminEntryController::class,'index']);
    Route::get('entries/create',        [AdminEntryController::class,'create']);
    Route::post('entries/store',        [AdminEntryController::class,'store']);
    Route::get('entry/details/{id}',    [AdminEntryController::class,'show']);
    Route::get('entry/pdfs/{id}',       [AdminEntryController::class,'pdfs']);
    Route::post('entry/pdf/update',     [AdminEntryController::class,'updatePdf']);
    Route::get('entry/edit/{id}',       [AdminEntryController::class,'edit']);
    Route::post('entry/update',         [AdminEntryController::class,'update']);
    Route::get('entry/delete/{id}',     [AdminEntryController::class,'delete']);
    Route::get('entries/export',        [AdminEntryController::class,'export']);
});

/* ----------- User Routes ----------- */
Route::group(['prefix' => 'user', 'middleware' => ['user_auth']], function () {

    Route::get('dashboard', [UserDashboardController::class, 'index']);

    /*-------------- Enties routes -------------*/
    Route::get('entries/index',         [UserEntryController::class,'index']);
    Route::get('entries/create',        [UserEntryController::class,'create']);
    Route::post('entries/store',        [UserEntryController::class,'store']);
    Route::get('entry/details/{id}',    [UserEntryController::class,'show']);
    Route::get('entry/pdfs/{id}',       [UserEntryController::class,'pdfs']);
    Route::post('entry/pdf/update',     [UserEntryController::class,'updatePdf']);
    Route::get('entry/edit/{id}',       [UserEntryController::class,'edit']);
    Route::post('entry/update',         [UserEntryController::class,'update']);
    Route::get('entry/delete/{id}',     [UserEntryController::class,'delete']);
    Route::get('entries/export',        [UserEntryController::class,'export']);
});
