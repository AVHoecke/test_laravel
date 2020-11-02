<?php

use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [IndexController::class, 'index']);
Route::get('admin', [AdminController::class, 'index']);

// Working
Route::name('admin.')->group(function () {
    Route::get('companies', [AdminCompanyController::class, 'index'])->name('companies');
});
Route::prefix('admin')->group(function () {
    Route::get('companies', [AdminCompanyController::class, 'index'])->name('companies');
});



// Route::group([/* 'prefix' => 'admin',   */'name' => 'admin.'], function () {
//     Route::get('companies', [AdminCompanyController::class, 'index'])->name('companies');
// });
