<?php

namespace App\Http\Controllers;

use App\Mail\NewClient;
use App\Mail\Ticket;
use App\Models\Rentals;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_panel.showAllRentals', ['rentals' => Rentals::with(['client:id,name', 'botarga:id,name'])->get()]);
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
            'address' => $requestData['address'],
            'phone' => $requestData['phone'],
            'email' => $requestData['email'],''
        ]);

        $rentals = new Rentals();

        $rentals->botarga_id = $requestData['botarga_id'];
        $rentals->client_id = $client->id;
        $rentals->price = $requestData['price'];
        $rentals->returnDate = $requestData['returnDate'];
        $rentals->duration = $requestData['duration'];

        $rentals->save();

        Mail::to($requestData['email'])->queue(new Ticket($rentals->id, 'Renta de '.$rentals->botarga->name, $rentals->price));

        Mail::to('admin@pollobollo.com')->queue(new NewClient($client));
    }

    /**
     * Display the specified resource.
     */
    public function show(Rentals $rentals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rentals $rentals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rentals $rentals)
    {
        $request->validate([
            'botarga_id' => 'required',
            'price' => 'required',
            'returnDate' => 'required|date',
            'duration' => 'required'
        ]);

        $rentals->botarga_id = $request->botarga_id;
        $rentals->price = $request->price;
        $rentals->returnDate = $request->returnDate;
        $rentals->duration = $request->duration;

        $rentals->save();

        return redirect()->route('rentals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rentals $rentals)
    {
        $rentals->delete();
        return redirect()->route('rentals.index');
    }
}
