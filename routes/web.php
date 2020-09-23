<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleDriveController;
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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/drive/list', [GoogleDriveController::class, 'listFiles'])->name('drive.list');
Route::get('/drive/file/put', [GoogleDriveController::class, 'putFile'])->name('drive.put.file');
Route::get('/drive/list/data', [GoogleDriveController::class, 'listData'])->name('drive.list.data');
Route::get('/drive/get/file', [GoogleDriveController::class, 'getFile'])->name('drive.get.file');
Route::get('/drive/file/download/local', [GoogleDriveController::class, 'downloadFileToLocal'])->name('download.file.local');
// Auth::routes();
