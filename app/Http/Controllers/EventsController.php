<?php

namespace App\Http\Controllers;

use App\Mail\NewClient;
use App\Mail\Ticket;
use App\Models\Client;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;

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
    public function store(array $requestData)
    {
        $client = Client::create([
            'name' => $requestData['name'],
            'address' => $requestData['address_client'],
            'phone' => $requestData['phone'],
            'email' => $requestData['email'],
        ]);

        // Create event
        $events = new Events();

        $events->show_id = $requestData['show_id'];
        $events->client_id = $client->id;
        $events->date = $requestData['date'];
        $events->time = $requestData['time'];
        $events->duration = $requestData['duration'];
        $events->address = $requestData['address'];

        $events->save();

        Mail::to($requestData['email'])->queue(new Ticket($events->id, 'Show '.$events->show->name, $events->show->price));

        Mail::to('admin@pollobollo.com')->queue(new NewClient($client));
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
