<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/', [MovieController::class, 'index'])->name('movies.index');
Route::get('/ciao/{id}', [MovieController::class, 'show'])->name('movies.show');

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
