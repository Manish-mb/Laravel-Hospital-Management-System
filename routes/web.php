<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class,  'redirect']);

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function (){Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');});

Route::get('/add_doctor_view', [AdminController::class, 'addview']);
Route::post('/upload_doctor', [AdminController::class, 'upload']);

Route::post('/appointment', [HomeController::class, 'appointment']);

Route::get('/myappointment', [HomeController::class, 'myappointment']);

Route::get('/cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);

Route::get('/show_appointment', [AdminController::class, 'show_appointment']);

Route::get('/approved/{id}', [AdminController::class, 'approved']);

Route::get('/canceled/{id}', [AdminController::class, 'canceled']);

Route::get('/show_doctor', [AdminController::class, 'show_doctor']);

Route::get('/doctor_delete/{id}', [AdminController::class, 'doctor_delete']);

Route::get('/doctor_update/{id}', [AdminController::class, 'doctor_update']);

Route::post('/edit_doctor/{id}', [AdminController::class, 'edit_doctor']);
