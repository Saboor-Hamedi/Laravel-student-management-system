<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::get('/jobs', [JobController::class,'index'])->name('jobs');
Route::get('/show/{slug}', [JobController::class, 'show'])->name('show');


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('/about');
});
