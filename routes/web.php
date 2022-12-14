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



//HOME 


Route::get('/', function () {
    return view('welcome');
});

Route::get('/calendar', function () {
    return view('navbar/calendar');
});


Route::get('/posiciones', function () {
    return view('navbar/position');
});


Route::get('/normativas', function () {
    return view('navbar/normativa');
});

Route::get('/gamesNavbar', function () {
    return view('navbar/games');
});

Route::get('/posiciones', function () {
    return view('navbar/position');
});

Route::get('/noticias', function () {
    return view('navbar/notices ');
});

Route::get('/contactos', function () {
    return view('navbar/contact ');
});


Route::get('/patrocinadores', function () {
    return view('navbar/patrocinadores');
});





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route Hooks - Do not delete//
	Route::view('inscriptionsins', 'livewire.inscriptionsins.index')->middleware('auth');
	Route::view('inscriptionsgrs', 'livewire.inscriptionsgrs.index')->middleware('auth');
	Route::view('games', 'livewire.games.index')->middleware('auth');
	Route::view('participants', 'livewire.participants.index')->middleware('auth');
	Route::view('classrooms', 'livewire.classrooms.index')->middleware('auth');
	Route::view('categories', 'livewire.categories.index')->middleware('auth');
	Route::view('teams', 'livewire.teams.index')->middleware('auth');
    Route::get('download-pdf','App\Http\Livewire\Participants@generar_pdf')->name('descargar_pdf');
    Route::get('generar_pdf', [App\Http\Livewire\Participants::class, 'generatePdf'])->name('generar_pdf');
    Route::get('Generar_juegos', [App\Http\Livewire\Games::class, 'generatePdf'])->name('Generar_juegos');
    Route::get('categoria_pdf', [App\Http\Livewire\Categories::class, 'generatePdf'])->name('categoria_pdf');
    Route::get('classroom_pdf',[App\Http\Livewire\Classrooms::class, 'generatePdf'])->name('classroom_pdf');
    Route::get('generarTeam_pdf', [App\Http\Livewire\Teams::class, 'generatePdf'])->name('generarTeam_pdf');

Auth::routes();


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


