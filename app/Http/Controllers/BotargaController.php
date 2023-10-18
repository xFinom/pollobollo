<?php

namespace App\Http\Controllers;

use App\Models\Botarga;
use App\Models\Client;
use Illuminate\Http\Request;

class BotargaController extends Controller
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
            'name' => 'required',
            'stock' => 'required',
            'image' => 'required',
        ]);

        $botarga = new Botarga();

        $botarga->name = $request->name;
        $botarga->stock = $request->stock;
        $botarga->image = $request->image;

        $botarga->save();

        return redirect()->route('botarga.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Botarga $botarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Botarga $botarga)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Botarga $botarga)
    {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'image' => 'required',
        ]);

        $botarga->name = $request->name;
        $botarga->stock = $request->stock;
        $botarga->image = $request->image;

        $botarga->save();

        return redirect()->route('botarga.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Botarga $botarga)
    {
        $botarga->delete();

        return redirect()->route('botarga.index');
    }
}
