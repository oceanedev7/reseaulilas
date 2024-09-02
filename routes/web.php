<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactRequestController;



Route::get('/', function () {
    return view('pages.guest.accueil');
})->name('accueil');

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

Route::get('/actualites/details', function () {
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

Route::get('/recrutement', function () {
    return view('pages.guest.recrutement-liste');
})->name('recrutement');

Route::get('/recrutement/detail', function () {
    return view('pages.guest.recrutement-detail');
});

Route::get('/deveniradherente/formule1', function () {
    return view('pages.guest.formule1');
})->name('formule1');

Route::get('/deveniradherente/formule2', function () {
    return view('pages.guest.formule2');
})->name('formule2');

Route::get('/deveniradherente/formule3', function () {
    return view('pages.guest.formule3');
})->name('formule3');

Route::get('/deveniradherente/formule4', function () {
    return view('pages.guest.formule4');
})->name('formule4');

Route::post('/demandecontact', [ContactRequestController::class, 'store'])->name('contact-request');
Route::get('/contact', [ContactRequestController::class, 'index'])->name('contact');

// Route::get('/contact', function () {
//     return view('pages.guest.contact');
// })->name('contact');

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
