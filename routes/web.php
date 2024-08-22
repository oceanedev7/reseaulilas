<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.guest.accueil');
})->name('accueil');

Route::get('/contact', function () {
    return view('pages.guest.contact');
})->name('contact');

Route::get('/devenir/partenaire', function () {
    return view('pages.guest.devenirpartenaire');
})->name('devenir-partenaire');

Route::get('/devenir/benevole', function () {
    return view('pages.guest.devenirbenevole');
})->name('devenir-benevole');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
