<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/',[\App\Http\Controllers\HomeController::class,'index']);

Route::get('/home',[\App\Http\Controllers\HomeController::class,'redirect'])->middleware('auth','verified');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/add_doctor_view',[\App\Http\Controllers\AdminController::class,'addview']);
Route::post('/upload_doctor',[\App\Http\Controllers\AdminController::class,'upload']);
Route::post('/appointment',[\App\Http\Controllers\HomeController::class,'appointment']);
Route::get('/myappointment',[\App\Http\Controllers\HomeController::class,'myAppointment']);
Route::get('/cancel_appoint/{id}',[\App\Http\Controllers\HomeController::class,'cancelAppoint']);
Route::get('/showappointment',[\App\Http\Controllers\AdminController::class,'showAppointment']);

Route::get('/approved/{id}',[\App\Http\Controllers\AdminController::class,'approved']);
Route::get('/cancelled/{id}',[\App\Http\Controllers\AdminController::class,'cancelled']);
Route::get('/showdoctor',[\App\Http\Controllers\AdminController::class,'showDoctor']);
Route::get('/delete/{id}',[\App\Http\Controllers\AdminController::class,'delete']);
Route::get('/update/{id}',[\App\Http\Controllers\AdminController::class,'update']);
Route::post('/editDoctor/{id}',[\App\Http\Controllers\AdminController::class,'editDoctor']);
Route::get('/emailView/{id}',[\App\Http\Controllers\AdminController::class,'emailView']);
Route::post('/sendEmail/{id}',[\App\Http\Controllers\AdminController::class,'sendEmail']);









require __DIR__.'/auth.php';
