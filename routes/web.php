<?php

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

Route::get('/', function () {
    return view('index');
});

use \App\Http\Controllers\CadWebTp1EtudiantController;

Route::get('etudiants', [CadWebTp1EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('etudiants/{etudiant}', [CadWebTp1EtudiantController::class, 'show'])->name('etudiant.show');
Route::get('enregistrement', [CadWebTp1EtudiantController::class, 'create'])->name('etudiant.create');
Route::post('enregistrement', [CadWebTp1EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('modification/{etudiant}', [CadWebTp1EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('modification/{etudiant}', [CadWebTp1EtudiantController::class, 'update']);
Route::delete('modification/{etudiant}', [CadWebTp1EtudiantController::class, 'destroy']);