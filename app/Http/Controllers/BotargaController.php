<?php

namespace App\Http\Controllers;

use App\Models\Botarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BotargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_panel.showAllBotargas', ['botargas' => Botarga::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin_panel.createBotarga')    ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'rent_price' => 'required',
            'gift_price' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $botarga = new Botarga();

        $botarga->name = $request->name;
        $botarga->stock = $request->stock;
        $botarga->rent_price = $request->rent_price;
        $botarga->gift_price = $request->gift_price;
        $botarga->description = $request->description;

        $path = $request->file('image')->store('botarga', 'public');
        $botarga->image = $path;

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
        return view('admin_panel.editBotarga', ['botarga' => Botarga::find($botarga->id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Botarga $botarga)
    {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $botarga->name = $request->name;
        $botarga->stock = $request->stock;

        if($request->hasFile('image')) {
            $path = $request->file('image')->store('botarga', 'public');
            $botarga->image = $path;
        }

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
