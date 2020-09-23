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

Route::get('/drive/list', [GoogleDriveController::class, 'listFiles'])->name('drive.list');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
// Auth::routes();
