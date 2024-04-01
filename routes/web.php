<?php

use App\Http\Controllers\AuthDoctor;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RecherchController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReviewController::class, 'index'])->name('homepage');
Route::post('/', [ReviewController::class, 'store'])->name('commentaires.store');


// Route::get('/', function () {
//     return view('guest');
// })->name('guest');



Route::middleware('auth')->group(function () {
    Route::delete('/logout', [AuthDoctor::class, 'logout'])->name('logout');
    Route::resource('doctors', DoctorController::class);
    Route::get('/doctor/profile',[DoctorController::class,'Profile'])->name('doctor.profile');
    Route::get('/doctor/profile/cv',[DoctorController::class,'downloadPDFDoctor'])->name('doctor.profile.cv');
    Route::get('/doctor/updatePassword',[DoctorController::class,'ShowFormUpdatePassword'])->name('updatePassword.show');
    Route::put('/doctor/updatePassword',[DoctorController::class,'UpdatePassword'])->name('updatePassword.post');
    Route::resource('/doctor/calendries', CalendrierController::class);
    Route::get('/doctor/reservations', [ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservations/filtrer', [ReservationController::class, 'filtrer'])->name('reservation.filtrer');
Route::get('/historique', [ReservationController::class, 'touReservation'])->name('reservation.historique');
Route::get('/reservation/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
Route::put('/reservation/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
Route::get('/doctor/reservations', [ReservationController::class, 'index'])->name('reservation.index');
Route::post('/reservations/filtrer', [ReservationController::class, 'filtrer'])->name('reservation.filtrer');
Route::get('/historique', [ReservationController::class, 'touReservation'])->name('reservation.historique');
Route::get('/reservation/{reservation}/edit', [ReservationController::class, 'edit'])->name('reservation.edit');
Route::put('/reservation/{reservation}', [ReservationController::class, 'update'])->name('reservation.update');
Route::get('/patients', [ReservationController::class, 'patient'])->name('patient.historique');
});
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthDoctor::class, 'showRegister'])->name('register.show');
    Route::post('/register', [AuthDoctor::class, 'register'])->name('register.post');

    Route::get('/login', [AuthDoctor::class, 'showLogin'])->name('login.show');
    Route::post('/login', [AuthDoctor::class, 'login'])->name('login.post');
});
Route::get('/backtorecherche',function(){
    return view('RECHERCHER');
});
Route::get('/afficherdoctor',[RecherchController::class,'afficher'])->name('afficherdoctor');
Route::match(['get', 'post'], '/rd', [RecherchController::class,'rechercher'])->name('rd');

Route::get('/testh',function(){
    return  view('PAGEPRICIPALCLIENT');
})
;

// Route::get('/show_doctor/{jour?}/{id?}', [medicoController::class, 'show_domand'])->name('show_dr');
Route::get('/show_doctor/{id}/{jour?}/{lang?}', [MedicoController::class, 'show_domand'])->name('show_dr');

Route::post('/demande_reservation/{id}', [medicoController::class, 'demande_reservation'])->name('demande_reservation');
Route::get('/contact/{id}/{jour?}', [medicoController::class, 'show_contact_page'])->name('show_contact_page');
Route::get('locale/{lange}',[medicoController::class, 'changelang']);

