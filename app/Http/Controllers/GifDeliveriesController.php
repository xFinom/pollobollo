<?php

namespace App\Http\Controllers;

use App\Mail\NewClient;
use App\Mail\Ticket;
use App\Models\Client;
use App\Models\GifDeliveries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GifDeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_panel.showAllGiftDeliveries', ['deliveries' => GifDeliveries::with(['client:id,name', 'botarga:id,name'])->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(array $requestData)
    {
        $client = Client::create([
            'name' => $requestData['name'],
            'address' => $requestData['address_client'],
            'phone' => $requestData['phone'],
            'email' => $requestData['email'],
        ]);

        $gifDeliveries = new GifDeliveries();

        $gifDeliveries->botarga_id = $requestData['botarga_id'];
        $gifDeliveries->client_id = $client->id;
        $gifDeliveries->date = $requestData['date'];
        $gifDeliveries->time = $requestData['time'];
        $gifDeliveries->price = $requestData['price'];
        $gifDeliveries->courtesyGift = $requestData['courtesyGift'];

        $gifDeliveries->save();

        Mail::to($requestData['email'])->queue(new Ticket($gifDeliveries->id, 'Entrega de regalos por '.$gifDeliveries->botarga->name, $gifDeliveries->botarga->gift_price));

        Mail::to('admin@pollobollo.com')->queue(new NewClient($client));
    }

    /**
     * Display the specified resource.
     */
    public function show(GifDeliveries $gifDeliveries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GifDeliveries $gifDeliveries)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GifDeliveries $gifDeliveries)
    {
        $request->validate([
            'botarga_id' => 'required',
            'price' => 'required|date',
            'date' => 'required',
            'time' => 'required',
            'courtesyGift' => 'required',
        ]);

        $gifDeliveries->botarga_id = $request->botarga_id;
        $gifDeliveries->date = $request->date;
        $gifDeliveries->time = $request->time;
        $gifDeliveries->price = $request->price;
        $gifDeliveries->courtesyGift = $request->courtesyGift;

        $gifDeliveries->save();

        return redirect()->route('gift_deliveries.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GifDeliveries $gifDeliveries)
    {
        //
    }
}
