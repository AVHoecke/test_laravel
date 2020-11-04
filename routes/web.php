<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminCityController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCompanyController;
use App\Http\Controllers\AdminVacancyController;
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

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('admin', [AdminController::class, 'index']);

Route::group(['prefix' => 'admin',  'as' => 'admin.'], function () {
    Route::get('/companies', [AdminCompanyController::class, 'index'])->name('companies');

    // Route::get('company/create', [AdminCompanyController::class, 'create'])->name('company.create');
    // Route::post('company/store', [AdminCompanyController::class, 'store'])->name('company.store');
    // Route::get(
    // 'company/{id}/edit/',
    // [AdminCompanyController::class, 'edit']
    // )->name('company.edit');
    // Route::post(
    //     'company/{id}/update/',
    //     [AdminCompanyController::class, 'update']
    // )->name('company.update');
    // Route::post(
    //     'company/{id}/destroy/',
    //     [AdminCompanyController::class, 'destroy']
    // )->name('company.destroy');

    // Route::resource(
    //     'company/{id}', AdminCompanyController::class
    //     // 'posts' => PostController::class,
    // )->names([
    //     '' => 'company.destroy'
    // ]);

    // FOUND aritsan route:list !
    Route::resource('company', AdminCompanyController::class);
    
    Route::get('/cities', [AdminCityController::class, 'index'])->name('cities');
    Route::resource('city', AdminCityController::class);
    Route::get('/vacancies', [AdminVacancyController::class, 'index'])->name('vacancies');
    Route::resource('vacancy', AdminVacancyController::class);
});

