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

Route::name('drive.')->group(function () {
	Route::get('/list', [GoogleDriveController::class, 'listFiles'])->name('list');
	Route::get('/file/put', [GoogleDriveController::class, 'putFile'])->name('put.file');
	Route::get('/list/data', [GoogleDriveController::class, 'listData'])->name('list.data');
	Route::get('/get/file', [GoogleDriveController::class, 'getFile'])->name('get.file');
	Route::get('/file/download/local', [GoogleDriveController::class, 'downloadFileToLocal'])->name('download.file.local');
	Route::get('/file/export', [GoogleDriveController::class, 'exportFile'])->name('export.drive.file');
});