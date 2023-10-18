<?php

namespace App\Http\Controllers;

use App\Models\Show;
use Illuminate\Http\Request;
use App\Models\Events;

class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Regresar vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // regresar vista
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required',
        ]);

        $show = new Show();

        $show->name = $request->name;
        $show->description = $request->description;
        $show->duration = $request->duration;
        $show->price = $request->price;

        $show->save();

        return redirect()->route('show.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Show $show)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Show $show)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Show $show)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'price' => 'required',
        ]);

        $show->name = $request->name;
        $show->description = $request->description;
        $show->duration = $request->duration;
        $show->price = $request->price;

        $show->save();

        return redirect()->route('show.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Show $show)
    {
        $show->delete();

        return redirect()->route('show.index');
    }
}
