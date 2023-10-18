<?php

namespace App\Http\Controllers;

use App\Models\Rentals;
use App\Models\Client;
use Illuminate\Http\Request;

class RentalsController extends Controller
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
            'price' => 'required',
            'returnDate' => 'required|date',
            'duration' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|max:15',
            'email' => 'required|email',
        ]);

        $client = Client::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->address,
            'email' => $request->email,
        ]);

        $rentals = new Rentals();

        $rentals->botarga_id = $request->botarga_id;
        $rentals->cliente_id = $client->id;
        $rentals->price = $request->price;
        $rentals->returnDate = $request->returnDate;
        $rentals->duration = $request->duration;

        $rentals->save();

        return redirect()->route('rentals.index');
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
