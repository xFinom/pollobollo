<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\GifDeliveries;
use Database\Factories\GifDeliveriesFactory;
use Illuminate\Http\Request;

class GifDeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $request->validate([
            'botarga_id' => 'required',
            'price' => 'required|date',
            'date' => 'required',
            'time' => 'required',
            'courtesyGift' => 'required',
            'name' => 'required',
            'address_client' => 'required',
            'phone' => 'required|max:15',
            'email' => 'required|email',
        ]);

        $client = Client::create([
            'name' => $request->name,
            'address' => $request->address_client,
            'phone' => $request->address,
            'email' => $request->email,
        ]);

        $gifDeliveries = new GifDeliveries();

        $gifDeliveries->botarga_id = $request->botarga_id;
        $gifDeliveries->cliente_id = $client->id;
        $gifDeliveries->date = $request->date;
        $gifDeliveries->time = $request->time;
        $gifDeliveries->price = $request->price;
        $gifDeliveries->courtesyGift = $request->courtesyGift;

        $gifDeliveries->save();

        return redirect()->route('gift_deliveries.index');
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
