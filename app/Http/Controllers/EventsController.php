<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin_panel.showAllEvents', ['events' => Events::with(['client:id,name', 'show:id,name'])->get()]);
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
            'show_id' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'duration' => 'required',
            'address' => 'required',
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

        $events = new Events();

        $events->show_id = $request->show_id;
        $events->cliente_id = $client->id;
        $events->date = $request->date;
        $events->time = $request->time;
        $events->duration = $request->duration;
        $events->address = $request->address;

        $events->save();

        return redirect()->route('rentals.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Events $events)
    {
        $request->validate([
            'show_id' => 'required',
            'date' => 'required|date',
            'time' => 'required',
            'duration' => 'required',
            'address' => 'required',
        ]);

        $events->show_id = $request->show_id;
        $events->date = $request->date;
        $events->time = $request->time;
        $events->duration = $request->duration;
        $events->address = $request->address;

        $events->save();

        return redirect()->route('rentals.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $events)
    {
        //
    }
}
