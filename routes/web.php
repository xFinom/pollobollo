<?php

use Illuminate\Support\Facades\Route;
use App\Models\Client;
use App\Models\Rentals;
use App\Models\Show;
use App\Models\Botarga;
use App\Models\GifDeliveries;
use App\Models\Events;

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

Route::resource('client', Client::class);
Route::resource('rentals', Rentals::class);
Route::resource('show', Show::class);
Route::resource('botarga', Botarga::class);
Route::resource('gift_deliveries', GifDeliveries::class);
Route::resource('events', Events::class);
