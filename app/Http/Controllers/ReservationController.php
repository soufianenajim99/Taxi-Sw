<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Driver;
use App\Models\Passenger;
use App\Models\Traject;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
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
            'departure_date' => ['required'],
            'payement_type' => ['required'],
        ]);
        
        $passenger = Passenger::where('user_id', Auth::user()->id)->first();
        $driver = Driver::where('user_id', $request->driver)->first();
     
        
        
         Reservation::create([
            'departure_date' => $request->departure_date,
            'traject_id'=> $request->traject,
            'driver_id' => $driver->id,
            'payement_type'=> $request->payement_type,
            'passenger_id'=> $passenger->id,
        ]);
        
         

        return redirect('/');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trajects =Traject::findorFail($id);
        return view("reservation.reservation_page",[
            "traject"=> $trajects,
        ]);
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}