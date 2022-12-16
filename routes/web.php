<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

Route::get('/formOrder', [OrderController::class, 'formOrder'])->middleware('auth');
Route::post('/formOrder', [OrderController::class, 'store'])->middleware('auth');

Route::get('/orderan', [OrderController::class, 'ViewOrder'])->middleware('auth');
