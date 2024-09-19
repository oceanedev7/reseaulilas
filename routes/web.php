<?php

use App\Models\Agenda;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ActualiteController;
use App\Http\Controllers\ContactContentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactRequestController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FormulesController;
use App\Http\Controllers\GlobalNumberController;
use App\Http\Controllers\Job_offerController;
use App\Http\Controllers\MissionsController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\NospartenairesController;
use App\Http\Controllers\NousdecouvrirController;
use App\Http\Controllers\NumberContentController;
use App\Http\Controllers\OfficeAddressController;
use App\Http\Controllers\Partner_SignupController;
use App\Http\Controllers\PartnerContentController;
use App\Http\Controllers\PartnerLogosController;
use App\Http\Controllers\PartnerThanksController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\Volunteer_SignupController;
use App\Http\Controllers\VolunteerContentController;
use App\Models\Formules;
use App\Models\Office_adress_content;


Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::get('/devenir/adherente', function () {
    return view('pages.guest.deveniradherente');
})->name('devenir-adherente');


Route::get('/nous/decouvrir', [NousdecouvrirController::class, 'index'])->name('nous-decouvrir');


Route::get('/actualites', [ActualiteController::class, 'indexView'])->name('actualites');
Route::get('/actualite/details/{id}', [ActualiteController::class, 'showView'])->name('actualite-details');


Route::get('/agenda', [EvenementController::class, 'indexView'])->name('agenda');
Route::get('/agenda/details/{id}', [EvenementController::class, 'showView'])->name('evenement-details');
Route::get('/agenda/evenement/filtrer', [EvenementController::class, 'filtrer'])->name('filtrer');


Route::get('/nospartenaires', [NospartenairesController::class, 'index'])->name('nospartenaires');

Route::get('/recrutement', [Job_offerController::class, 'indexView'])->name('recrutement');
Route::get('/recrutement/detail/{id}', [Job_offerController::class, 'showView'])->name('recrutement-details');


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
        Route::get('/espaceadmin/evenement/details/{id}', [EvenementController::class, 'show'])->name('event-details');
        Route::get('/delete/evenement/{id}', [EvenementController::class, 'destroy'])->name('delete-event');
        Route::get('/espaceadmin/evenement/edit/{id}', [EvenementController::class, 'edit'])->name('event-edit');
        Route::post('/espaceadmin/evenement/update/{id}', [EvenementController::class, 'update'])->name('event-update');
        
        Route::get('/espaceadmin/contenu', function () {
            return view('pages.admin.contenu');
        })->name('contenu');

        Route::get('/espaceadmin/contact', function () {
            return view('pages.admin.contact');
        })->name('contact-admin');

        Route::get('/espaceadmin/partenaires', function () {
            return view('pages.admin.partenaires');
        })->name('partenaires-admin');

        Route::get('/espaceadmin/accueil', function () {
            return view('pages.admin.accueil');
        })->name('accueil-admin');

        Route::get('/espaceadmin/nous-decouvrir', function () {
            return view('pages.admin.decouvrir');
        })->name('decouvrir-admin');

        Route::get('/espaceadmin/nous-rejoindre', function () {
            return view('pages.admin.rejoindre');
        })->name('rejoindre-admin');


        Route::get('/espaceadmin/office-adresses', [OfficeAddressController::class, 'index'])->name('adresse');
        Route::post('/espaceadmin/nouvelle-adresse', [OfficeAddressController::class, 'create'])->name('new-adress');
        Route::get('/delete/office-adresse/{id}', [OfficeAddressController::class, 'destroy'])->name('delete-adress');
        Route::get('/espaceadmin/office-adress/edit/{id}', [OfficeAddressController::class, 'edit'])->name('adress-edit');
        Route::post('/espaceadmin/office-adress/update/{id}', [OfficeAddressController::class, 'update'])->name('adress-update');

        Route::get('/espaceadmin/partner-thanks', [PartnerThanksController::class, 'index'])->name('partners');
        Route::post('/espaceadmin/nouvelle-description', [PartnerThanksController::class, 'create'])->name('new-description');
        Route::get('/espaceadmin/partner-thanks/edit/{id}', [PartnerThanksController::class, 'edit'])->name('partner-edit');
        Route::post('/espaceadmin/partner-thanks/update/{id}', [PartnerThanksController::class, 'update'])->name('partner-update');

        Route::get('/espaceadmin/partner-logos', [PartnerLogosController::class, 'index'])->name('partner-logo');
        Route::post('/espaceadmin/nouveau-logo', [PartnerLogosController::class, 'create'])->name('new-logo');
        Route::get('/delete/partner-logos/{id}', [PartnerLogosController::class, 'destroy'])->name('delete-logo');

        Route::get('/espaceadmin/contact-content', [ContactContentController::class, 'index'])->name('contact-content');
        Route::post('/espaceadmin/nouveau-contact', [ContactContentController::class, 'create'])->name('new-contact');
        Route::get('/espaceadmin/contact-content/edit/{id}', [ContactContentController::class, 'edit'])->name('contact-edit');
        Route::post('/espaceadmin/contact-content/update/{id}', [ContactContentController::class, 'update'])->name('contact-update');

        Route::get('/espaceadmin/global-numbers', [GlobalNumberController::class, 'index'])->name('global-number');
        Route::post('/espaceadmin/new-global-number', [GlobalNumberController::class, 'create'])->name('new-global-number');
        Route::get('/espaceadmin/global-number/edit/{id}', [GlobalNumberController::class, 'edit'])->name('global-number-edit');
        Route::post('/espaceadmin/global-number/update/{id}', [GlobalNumberController::class, 'update'])->name('global-number-update');

        Route::get('/espaceadmin/reviews', [ReviewsController::class, 'index'])->name('reviews');
        Route::post('/espaceadmin/new-review', [ReviewsController::class, 'create'])->name('new-review');
        Route::get('/espaceadmin/review/edit/{id}', [ReviewsController::class, 'edit'])->name('review-edit');
        Route::post('/espaceadmin/review/update/{id}', [ReviewsController::class, 'update'])->name('review-update');

        Route::get('/espaceadmin/network', [NetworkController::class, 'index'])->name('network');
        Route::post('/espaceadmin/new-network', [NetworkController::class, 'create'])->name('new-network');
        Route::get('/espaceadmin/network/edit/{id}', [NetworkController::class, 'edit'])->name('network-edit');
        Route::post('/espaceadmin/network/update/{id}', [NetworkController::class, 'update'])->name('network-update');

        Route::get('/espaceadmin/formules', [FormulesController::class, 'index'])->name('formules');
        Route::post('/espaceadmin/new-formule', [FormulesController::class, 'create'])->name('new-formule');
        Route::get('/espaceadmin/formule/details/{id}', [FormulesController::class, 'show'])->name('formule-details');
        Route::get('/espaceadmin/formule/edit/{id}', [FormulesController::class, 'edit'])->name('formule-edit');
        Route::post('/espaceadmin/formule/update/{id}', [FormulesController::class, 'update'])->name('formule-update');        

        Route::get('/espaceadmin/about', [AboutController::class, 'index'])->name('about-content');
        Route::post('/espaceadmin/new-about-content', [AboutController::class, 'create'])->name('new-about-content');
        Route::get('/espaceadmin/about-content/edit/{id}', [AboutController::class, 'edit'])->name('about-content-edit');
        Route::post('/espaceadmin/about-content/update/{id}', [AboutController::class, 'update'])->name('about-content-update');

        Route::get('/espaceadmin/missions', [MissionsController::class, 'index'])->name('missions');
        Route::post('/espaceadmin/new-mission', [MissionsController::class, 'create'])->name('new-mission');
        Route::get('/espaceadmin/mission/edit/{id}', [MissionsController::class, 'edit'])->name('mission-edit');
        Route::post('/espaceadmin/mission/update/{id}', [MissionsController::class, 'update'])->name('mission-update');

        Route::get('/espaceadmin/team-content', [TeamController::class, 'index'])->name('team-content');
        Route::post('/espaceadmin/new-team-content', [TeamController::class, 'create'])->name('new-team');
        Route::get('/espaceadmin/team/edit/{id}', [TeamController::class, 'edit'])->name('team-edit');
        Route::post('/espaceadmin/team/update/{id}', [TeamController::class, 'update'])->name('team-update');
        Route::get('/delete/team/{id}', [TeamController::class, 'destroy'])->name('delete-team');


        Route::get('/espaceadmin/number-content', [NumberContentController::class, 'index'])->name('number-content');
        Route::post('/espaceadmin/new-number-content', [NumberContentController::class, 'create'])->name('new-number');
        Route::get('/espaceadmin/number/edit/{id}', [NumberContentController::class, 'edit'])->name('number-edit');
        Route::post('/espaceadmin/number/update/{id}', [NumberContentController::class, 'update'])->name('number-update');

        Route::get('/espaceadmin/partner-content', [PartnerContentController::class, 'index'])->name('partner-content');
        Route::post('/espaceadmin/new-partner-content', [PartnerContentController::class, 'create'])->name('new-partner-content');
        Route::get('/espaceadmin/partner-content/edit/{id}', [PartnerContentController::class, 'edit'])->name('partner-content-edit');
        Route::post('/espaceadmin/partner-content/update/{id}', [PartnerContentController::class, 'update'])->name('partner-content-update');

        Route::get('/espaceadmin/volunteer-content', [VolunteerContentController::class, 'index'])->name('volunteer-content');
        Route::post('/espaceadmin/new-volunteer-content', [VolunteerContentController::class, 'create'])->name('new-volunteer-content');
        Route::get('/espaceadmin/volunteer-content/edit/{id}', [VolunteerContentController::class, 'edit'])->name('volunteer-content-edit');
        Route::post('/espaceadmin/volunteer-content/update/{id}', [VolunteerContentController::class, 'update'])->name('volunteer-content-update');

    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
