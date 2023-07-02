<?php

use App\Http\Controllers\ApplicationsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::resource('applications', ApplicationsController::class)
        ->names('applications');
    Route::get('applications/destroy/{id}', [ApplicationsController::class, 'destroy'])
        ->name('applications.destroy');
    Route::resource('categories', CategoriesController::class)
        ->names('categories');
    Route::get('categories/destroy/{id}', [CategoriesController::class, 'destroy'])
        ->name('categories.destroy');
});

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
