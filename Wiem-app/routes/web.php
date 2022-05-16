<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\CvController;

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

//Integration python test
Route::get('/analyse/{id}', [UploadController::class,'analyse'])->name('analyse');

//Integration python ajout depart
// Route::put('/user', [UploadController::class,'update']);





Route::get('/profile', [App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'changePasswordPost'])->name('changePasswordPost');


Route::get('/', function () {
    return view('welcome');
});





Route::get('/addcv', function () {
    return view('addcv');
})->middleware(['auth'])->name('dashboard');


Route::post('/it', [UploadController::class, 'store'])->name('store');

// Route::get('/profile', 'PagesController@profile');
Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth'])->name('dashboard');

Route::get('/it', function () {
    return view('departement.it');
})->middleware(['auth'])->name('dashboard');

Route::get('/serviceClient', function () {
    return view('departement.serviceClient');
})->middleware(['auth'])->name('dashboard');

Route::get('/manager', function () {
    return view('departement.manager');
})->middleware(['auth'])->name('dashboard');

Route::get('/hr', function () {
    return view('departement.hr');
})->middleware(['auth'])->name('dashboard');

Route::get('/autres', function () {
    return view('departement.autres');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/search/',[App\Http\Controllers\CvController::class, 'search'])->name('search');


Route::get('/cvs/create', [App\Http\Controllers\CvController::class, 'create'])->name('create');
Route::post('/cvs', [App\Http\Controllers\CvController::class, 'store'])->name('store');
Route::get('/cvs', [App\Http\Controllers\CvController::class, 'index'])->name('index');
Route::get('/cvs/{id}/edit', [App\Http\Controllers\CvController::class, 'edit'])->name('edit');
Route::put('/cvs/{id}', [App\Http\Controllers\CvController::class, 'update'])->name('update');
Route::delete('/cvs/{id}', [App\Http\Controllers\CvController::class, 'destroy'])->name('destroy');







require __DIR__.'/auth.php';
