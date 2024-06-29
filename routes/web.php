<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\RincianBiayaServiceController;

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

//Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');


//Route Akun
Route::get('/akun', [UserController::class, 'index']);
Route::get('/akun/create', [UserController::class, 'create']);
Route::post('/akun/store', [UserController::class, 'store']);
Route::get('/akun/edit/{id}', [UserController::class, 'edit']);
Route::patch('/akun/update/{id}', [UserController::class, 'update']);
Route::delete('/akun/delete/{id}', [UserController::class, 'destroy']);
Route::get('/akun/show/{id}', [UserController::class, 'show']);

//Route Kendaraan
Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/kendaraan/create', [KendaraanController::class, 'create']);
Route::post('/kendaraan/store', [KendaraanController::class, 'store']);
Route::get('/kendaraan/edit/{id}', [KendaraanController::class, 'edit']);
Route::patch('/kendaraan/update/{id}', [KendaraanController::class, 'update']);
Route::delete('/kendaraan/delete/{id}', [KendaraanController::class, 'destroy']);
Route::get('/kendaraan/show/{id}', [KendaraanController::class, 'show']);

//Route Supir
Route::get('/supir', [SupirController::class, 'index']);
Route::get('/supir/create', [SupirController::class, 'create']);
Route::post('/supir/store', [SupirController::class, 'store']);
Route::get('/supir/edit/{id}', [SupirController::class, 'edit']);
Route::patch('/supir/update/{id}', [SupirController::class, 'update']);
Route::delete('/supir/delete/{id}', [SupirController::class, 'destroy']);
Route::get('/supir/show/{id}', [SupirController::class, 'show']);

//Route Service
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::patch('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::delete('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');
Route::get('/service/show/{id}', [ServiceController::class, 'show'])->name('service.show');

//Route Rincian Biaya Service
Route::get('rincian_biaya', [RincianBiayaServiceController::class, 'index'])->name('rincian_biaya.index');
Route::get('rincian_biaya/create', [RincianBiayaServiceController::class, 'create'])->name('rincian_biaya.create');
Route::post('rincian_biaya/store', [RincianBiayaServiceController::class, 'store'])->name('rincian_biaya.store');
Route::get('rincian_biaya/edit/{id}', [RincianBiayaServiceController::class, 'edit'])->name('rincian_biaya.edit');
Route::put('rincian_biaya/update/{id}', [RincianBiayaServiceController::class, 'update'])->name('rincian_biaya.update');
Route::delete('rincian_biaya/delete/{id}', [RincianBiayaServiceController::class, 'destroy'])->name('rincian_biaya.destroy');