<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


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

Route::get('/devenir/adherente', function () {
    return view('pages.guest.deveniradherente');
})->name('devenir-adherente');

Route::get('/nous/decouvrir', function () {
    return view('pages.guest.nousdecouvrir');
})->name('nous-decouvrir');

Route::get('/actualites', function () {
    return view('pages.guest.actualites-liste');
})->name('actualites');

Route::get('/actualites/detail', function () {
    return view('pages.guest.actualite-detail');
});

Route::get('/agenda', function () {
    return view('pages.guest.agenda');
})->name('agenda');

Route::get('/evenement', function () {
    return view('pages.guest.evenement');
});

Route::get('/nospartenaires', function () {
    return view('pages.guest.nospartenaires');
})->name('nospartenaires');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get('/dashboard/admin/reseaulilas', function () {
    return redirect()->route('login'); 
})->middleware(['auth', 'admin'])->name('admin.reseaulilas');

Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
