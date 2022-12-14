<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FixtureController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/view-pool-data/{id}', [HomeController::class,'view_pool_data'])->name('view_pool_data');
Route::get('/head-to-head/{id}', [HomeController::class,'view_head_to_head'])->name('view_head_to_head');
Route::get('/dashboard',[DashboardController::class,'index']);
Route::get('/fixtures/{id}',[FixtureController::class,'fixtures'])->name('fixtures');
