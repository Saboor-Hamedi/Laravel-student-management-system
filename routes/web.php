<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

// Route::get('/jobs/{slug}', [JobController::class, 'index'])->name('jobs');
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/create', [JobController::class, 'create'])->name('create');
Route::post('/store', [JobController::class, 'store'])->name('store');
Route::get('/show/{slug}', [JobController::class, 'show'])->name('show');
Route::get('/search', [SearchController::class, 'search'])->name('search');


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('/about');
});
