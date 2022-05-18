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



Route::get('/profile', [App\Http\Controllers\HomeController::class, 'showChangePasswordGet'])->middleware(['auth'])->name('changePasswordGet');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'changePasswordPost'])->middleware(['auth'])->name('changePasswordPost');


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



Route::get('/search/',[App\Http\Controllers\CvController::class, 'search'])->middleware(['auth'])->name('search');


Route::get('/cvs/create', [App\Http\Controllers\CvController::class, 'create'])->middleware(['auth'])->name('create');
Route::post('/cvs', [App\Http\Controllers\CvController::class, 'store'])->middleware(['auth'])->name('store');
Route::get('/cvs', [App\Http\Controllers\CvController::class, 'index'])->middleware(['auth'])->name('index');
Route::get('/cvs/{id}/edit', [App\Http\Controllers\CvController::class, 'edit'])->middleware(['auth'])->name('edit');
Route::put('/cvs/{id}', [App\Http\Controllers\CvController::class, 'update'])->middleware(['auth'])->name('update');
Route::delete('/cvs/{id}', [App\Http\Controllers\CvController::class, 'destroy'])->middleware(['auth'])->name('destroy');


//queries
//get element of it departement
Route::get('/it', [App\Http\Controllers\CvController::class, 'getItDep'])->middleware(['auth'])->name('getItDep');
//get element of Production departement
Route::get('/production', [App\Http\Controllers\CvController::class, 'getProdDep'])->middleware(['auth'])->name('getProdDep');
//get element of Technique departement
Route::get('/technique', [App\Http\Controllers\CvController::class, 'getTechDep'])->middleware(['auth'])->name('getTechDep');
//get element of Administratif departement
Route::get('/administratif', [App\Http\Controllers\CvController::class, 'getAdDep'])->middleware(['auth'])->name('getAdDep');
//get element of Autres departement
Route::get('/autres', [App\Http\Controllers\CvController::class, 'getOtherDep'])->middleware(['auth'])->name('getOtherDep');



//Modif Autre depart
Route::put('/cvs/{id}', [App\Http\Controllers\CvController::class, 'updateAutre'])->middleware(['auth'])->name('updateAutre');

//Modif Prod depart
Route::put('/cvs/{id}', [App\Http\Controllers\CvController::class, 'updateprod'])->middleware(['auth'])->name('updateprod');


//Modif Administratif depart
Route::put('/cvs/{id}', [App\Http\Controllers\CvController::class, 'updateAdministratif'])->middleware(['auth'])->name('updateAdministratif');


//Modif tech depart
Route::put('/cvs/{id}', [App\Http\Controllers\CvController::class, 'updateTech'])->middleware(['auth'])->name('updateTech');

//Modif IT depart
Route::put('/cvs/{id}', [App\Http\Controllers\CvController::class, 'updateIT'])->middleware(['auth'])->name('updateIT');


require __DIR__.'/auth.php';
