<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InformasiPemesananController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
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
Route::redirect('/', '/login');

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/registrasi', [RegistrationController::class, 'index']);
Route::post('/registrasi', [RegistrationController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::get('/formOrder', [OrderController::class, 'formOrder'])->middleware('auth');
Route::post('/formOrder', [OrderController::class, 'store'])->middleware('auth');

Route::get('/orderan', [OrderController::class, 'ViewOrder'])->middleware('auth');
Route::get('/orderan/{id}', [OrderController::class, 'viewData'])->middleware('auth');

Route::get('/konfirmasi', [AdminController::class, 'indexC'])->middleware('auth');
Route::post('/konfirmasi', [AdminController::class, 'indexC'])->middleware('auth');
Route::get('/konfirmasi/{id}', [AdminController::class, 'destroy'])->middleware('auth');

Route::get('/rekap', [AdminController::class, 'indexR'])->middleware('auth');
Route::post('/rekap', [AdminController::class, 'viewTable'])->middleware('auth');
Route::get('/print', [AdminController::class, 'print'])->middleware('auth');

Route::get('/pay/{id}', [AdminController::class, 'pay'])->middleware('auth');
Route::get('/lunas/{id}', [AdminController::class, 'lunas'])->middleware('auth');
