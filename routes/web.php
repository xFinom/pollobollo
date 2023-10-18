<?php

use App\Http\Controllers\BotargaController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GifDeliveriesController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RentalsController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('client', ClientController::class);
Route::resource('rentals', RentalsController::class);
Route::resource('show', ShowController::class);
Route::resource('botarga', BotargaController::class);
Route::resource('gift_deliveries', GifDeliveriesController::class);
Route::resource('events', EventsController::class);

