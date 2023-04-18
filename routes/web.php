<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\ReferencielController;
use App\Http\Controllers\TypeController;
use App\Models\Formation;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/gestion', [TypeController::class, 'create']);
Route::get('/gestion', [TypeController::class, 'gestionType'])->name('gestionDesTypes');
Route::get('/', [TypeController::class, 'store'])->name('Accueil');
Route::get('/type/{id}',[TypeController::class, 'destroy']);
Route::get('/types/{id}/edit',[TypeController::class, 'edit']);
Route::put('/types/{id}', [TypeController::class, 'update'])->name('types.update');


Route::post('/gestionReferentiels', [ReferencielController::class, 'create']);
Route::get('/gestionReferentiels', [ReferencielController::class, 'gestionReferentiels'])->name('gestionReferentiels');
Route::get('/referentiel/{id}',[ReferencielController::class, 'destroy']);
Route::get('/referentiels/{id}/edit',[ReferencielController::class, 'edit']);
Route::put('/referentiels/{id}', [ReferencielController::class, 'update'])->name('referentiels.update');


Route::post('/gestionFormations', [FormationController::class, 'create']);
Route::get('/gestionFormations', [FormationController::class, 'gestionFormations'])->name('gestionformations');
Route::get('/formation/{id}',[FormationController::class, 'destroy']);
Route::get('/formations/{id}/edit',[FormationController::class, 'edit']);
Route::put('/formations/{id}', [FormationController::class, 'update'])->name('formations.update');

Route::get('/types/{id}', [TypeController::class, 'show'])->whereNumber('id');
Route::get('/referentiels/{id}', [ReferencielController::class, 'show'])->whereNumber('id');
Route::get('/formations/{id}', [FormationController::class,'show'])->whereNumber('id');
Route::post('/ajoute', [EtudiantController::class,'store']);
Route::get('/dashboard', [FormationController::class, 'canByfor'])->name('dashboard');
Route::get('/Formation_Par_Referentiel',[ReferencielController::class, 'forByRef']);
Route::get('/candidats_par_sexe',[EtudiantController::class,'repartitionParSexe']);
Route::get('/Tranche_age', [EtudiantController::class, 'trancheAge']);
Route::get('/formationParType', [FormationController::class, 'ForByType']);
Route::get('/statform', [FormationController::class, 'afficherStatistiquesFormations']);


