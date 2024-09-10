<?php

use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\Job_offerController;
use App\Http\Controllers\Partner_SignupController;
use App\Http\Controllers\Volunteer_SignupController;

Route::get('/', function () {
    return view('pages.guest.accueil');
})->name('accueil');

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


Route::get('/devenir/benevole', [Volunteer_SignupController::class, 'index'])->name('devenir-benevole');
Route::post('/inscription/benevole', [Volunteer_SignupController::class, 'store'])->name('volunteer-request');

Route::get('/devenir/partenaire', [Partner_SignupController::class, 'index'])->name('devenir-partenaire');
Route::post('/inscription/partenaire', [Partner_SignupController::class, 'store'])->name('partner-request');




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
        Route::get('/espaceadmin/offres-emploi', [Job_offerController::class, 'index'])->name('emploi');
        Route::post('/espaceadmin/nouvelle-offre-emploi', [Job_offerController::class, 'create'])->name('new-emploi');
        Route::get('/delete/emploi/{id}', [Job_offerController::class, 'destroy'])->name('delete-emploi');
        Route::get('/espaceadmin/offre-emploi/details/{id}', [Job_offerController::class, 'show'])->name('emploi-detail');
        Route::get('/espaceadmin/offre-emploi/edit/{id}', [Job_offerController::class, 'edit'])->name('emploi-edit');
        Route::post('/espaceadmin/offre-emploi/update/{id}', [Job_offerController::class, 'update'])->name('emploi-update');
       
        Route::get('/espaceadmin/actualites', [ActualiteController::class, 'index'])->name('actu');
        Route::post('/espaceadmin/nouvelle-actualite', [ActualiteController::class, 'create'])->name('new-actu');
        Route::get('/espaceadmin/actualite/details/{id}', [ActualiteController::class, 'show'])->name('actu-detail');
        Route::get('/delete/actualite/{id}', [ActualiteController::class, 'destroy'])->name('delete-actu');
        Route::get('/espaceadmin/actualite/edit/{id}', [ActualiteController::class, 'edit'])->name('actu-edit');
        Route::post('/espaceadmin/actualite/update/{id}', [ActualiteController::class, 'update'])->name('actu-update');

        Route::get('/espaceadmin/evenement', [EvenementController::class, 'index'])->name('event');
        Route::post('/espaceadmin/nouvel-evenement', [EvenementController::class, 'create'])->name('new-event');
        Route::get('/delete/evenement/{id}', [EvenementController::class, 'destroy'])->name('delete-event');
        Route::get('/espaceadmin/evenement/edit/{id}', [EvenementController::class, 'edit'])->name('event-edit');
        Route::get('/espaceadmin/evenement/details/{id}', [EvenementController::class, 'show'])->name('event-details');
        Route::post('/espaceadmin/evenement/update/{id}', [EvenementController::class, 'update'])->name('event-update');


    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
