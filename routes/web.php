<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('load');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function(){
    Route::get('/',[AdminController::class, 'index'])->name('index');
    //Route::resource();
});

Route::get('/zvonko', function () {
    return view('zvonko');
})->middleware(['auth', 'verified'])->name('zvonko');

Route::get('/load', function () {
    return view('load');
   
})->name('load');

Route::get('/fleet', function () {
    return view('fleet');
   
})->name('fleet');

require __DIR__.'/auth.php';
