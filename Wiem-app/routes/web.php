<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/profile', [App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->name('changePasswordGet');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'changePasswordPost'])->name('changePasswordPost');


Route::get('/', function () {
    return view('welcome');
});
Route::get('/addcv', function () {
    return view('addcv');
})->middleware(['auth'])->name('dashboard');

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

require __DIR__.'/auth.php';
