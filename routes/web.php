<?php

use App\Http\Controllers\Frontend\FrontController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');



// Set the root view for all admin routes
Route::group(['prefix' => 'admin', 'middleware' => 'web'], function () {

    Route::inertia('/', 'Backend/Dashboard')->name('admin.home');
    Route::get('/about', function(){
        return Inertia::render('Backend/Dashboard');
    });
    // Other admin routes...
});

