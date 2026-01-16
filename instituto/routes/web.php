<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\LocaleController;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::view('/', 'main')->name("main");

Route::get('/locale/{locale}', [LocaleController::class, 'setLocale'])->name('locale.set');

Route::view('/about', 'about');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('alumnos', AlumnoController::class);
Route::resource('proyectos', ProyectoController::class);

