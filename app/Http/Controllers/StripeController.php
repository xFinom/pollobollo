<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Events;
use App\Models\GifDeliveries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class StripeController extends Controller
{
    public function index() {
        return view('pruebaStripe');
    }

    public function checkout_botargas(Request $request) {
        $request->validate([
            'botarga_id' => 'required',
            'price' => 'required',
            'returnDate' => 'required|date',
            'duration' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|max:15',
            'email' => 'required|email',
        ]);

        $requestData = $request->only(['botarga_id', 'duration', 'address', 'name', 'address', 'phone', 'email', 'price', 'returnDate']);

        Stripe::setApiKey(config('stripe.sk'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' =>[
                        'currency' => 'mxn',
                        'product_data' => [
                            'name' => $request->title,
                        ],
                        'unit_amount' => $request->price * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => URL::signedRoute('success_botargas', ['requestData' => $requestData]),
            'cancel_url' => route('home'),
        ]);

        return redirect()->away($session->url);
    }

    public function checkout_regalos(Request $request) {
        $request->validate([
            'botarga_id' => 'required',
            'price' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'courtesyGift' => 'required',
            'name' => 'required',
            'address_client' => 'required',
            'phone' => 'required|max:15',
            'email' => 'required|email',
        ]);

        $requestData = $request->only(['botarga_id', 'address_client', 'name', 'date', 'time', 'phone', 'email', 'price', 'courtesyGift']);

        Stripe::setApiKey(config('stripe.sk'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' =>[
                        'currency' => 'mxn',
                        'product_data' => [
                            'name' => $request->title,
                        ],
                        'unit_amount' => $request->price * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => URL::signedRoute('success_regalos', ['requestData' => $requestData]),
            'cancel_url' => route('home'),
        ]);

        return redirect()->away($session->url);
    }

    public function checkout_shows(Request $request) {
        $request->validate([
            'show_id' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'duration' => 'required',
            'address' => 'required',
            'name' => 'required',
            'address_client' => 'required',
            'phone' => 'required|max:20',
            'email' => 'required|email',
        ]);

        $requestData = $request->only(['show_id', 'date', 'time', 'duration', 'address', 'name', 'address_client', 'phone', 'email']);

        Stripe::setApiKey(config('stripe.sk'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' =>[
                        'currency' => 'mxn',
                        'product_data' => [
                            'name' => $request->title,
                        ],
                        'unit_amount' => $request->price * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => URL::signedRoute('success_shows', ['requestData' => $requestData]),
            'cancel_url' => route('home'),
        ]);

        return redirect()->away($session->url);
    }

    public function success_botargas(Request $request) {
        if (!$request->hasValidSignature()) {
            abort(403, 'Invalid signature');
        }

        $requestData = $request->input('requestData');

        $rentalsController = new RentalsController();
        $rentalsController->store($requestData);

        return redirect()->route('renta')->with('success', 'Payment successful!');
    }

    public function success_regalos(Request $request) {
        if (!$request->hasValidSignature()) {
            abort(403, 'Invalid signature');
        }

        $requestData = $request->input('requestData');

        $giftDeliveries = new GifDeliveriesController();
        $giftDeliveries->store($requestData);

        return redirect()->route('regalos')->with('success', 'Payment successful!');
    }

    public function success_shows(Request $request) {
        if (!$request->hasValidSignature()) {
            abort(403, 'Invalid signature');
        }

        $requestData = $request->input('requestData');

        $eventsController = new EventsController();
        $eventsController->store($requestData);

        return redirect()->route('shows')->with('success', 'Pronto recibiras un correo.');
    }
}
