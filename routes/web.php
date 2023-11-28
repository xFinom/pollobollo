<?php

use App\Http\Controllers\BotargaController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\GifDeliveriesController;
use App\Http\Controllers\ShowController;
use App\Livewire\SalesChart;
use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RentalsController;
use App\Http\Controllers\StripeController;
use App\Models\Show;
use App\Models\Botarga;
use App\Models\GifDeliveries;
use App\Models\Rentals;
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
})->name('home');

Route::get('/renta/{botarga}', function ($botarga) {
    $param = Botarga::find($botarga);

    return view('rentals.contratacion-renta', ['botarga' => $param]);
})->name('contratacion-renta');

Route::get('/shows/{show}', function ($show) {
    $param = Show::find($show);

    return view('show.contratacion-show', ['show' => $param]);
})->name('contratacion-show');

Route::get('/regalo/{regalo}', function ($regalo) {
    $param = Botarga::find($regalo);

    return view('gift_deliveries.contratación-regalo', ['regalo' => $param]);
})->name('contratacion-regalo');


Route::get('/renta', function () {
    return view('rentals.rentals-list', ['articulos' => Botarga::all()]);
})->name('renta');

Route::get('/regalos', function () {
    return view('gift_deliveries.deliveries-list', ['articulos' => Botarga::all()]);
})->name('regalos');

Route::get('/shows', function () {
    return view('show.show-list', ['articulos' => Show::all()]);
})->name('shows');

Route::post('/renta/checkout', [StripeController::class, 'checkout_botargas'])->name('checkout_botargas');
Route::post('/regalos/checkout', [StripeController::class, 'checkout_regalos'])->name('checkout_regalos');
Route::post('/shows/checkout', [StripeController::class, 'checkout_shows'])->name('checkout_shows');

Route::get('/event/success', [StripeController::class, 'success_shows'])->name('success_shows');
Route::get('/rentas/success', [StripeController::class, 'success_botargas'])->name('success_botargas');
Route::get('/regalos/success', [StripeController::class, 'success_regalos'])->name('success_regalos');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $chartData = [
            'labels' => ['Entrega de Regalos', 'Rentas', 'Eventos'],
            'datasets' => [
                [
                    'label' => 'My Chart',
                    'backgroundColor' => ['#0694a2', '#1c64f2', '#7e3af2'],
                    'borderWidth' => 1,
                    'data' => [GifDeliveries::count(), Rentals::count(), Events::count()],
                ],
            ],
        ];

        $clientsChartData = [
            'labels' => ['Numero de clientes'],
            'datasets' => [
                [
                    'label' => 'Numero de clientes',
                    'backgroundColor' => 'rgba(75, 192, 192, 0.2)',
                    'borderColor' => 'rgba(75, 192, 192, 1)',
                    'borderWidth' => 1,
                    'data' => [Client::count()],
                ],
            ],
        ];

        return view('dashboard', ['clients' => Client::take(5)->get(), 'chartData' => $chartData, 'clientsChartData' => $clientsChartData]);
    })->name('dashboard');
});

Route::resource('client', ClientController::class);
Route::resource('rentals', RentalsController::class);
Route::resource('show', ShowController::class);
Route::resource('botarga', BotargaController::class);
Route::resource('gift_deliveries', GifDeliveriesController::class);
Route::resource('events', EventsController::class);

