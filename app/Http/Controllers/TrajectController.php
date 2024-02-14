<?php

namespace App\Http\Controllers;

use App\Models\Traject;
use App\Http\Requests\StoreTrajectRequest;
use App\Http\Requests\UpdateTrajectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrajectController extends Controller
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
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $traject= $request->validate([
            'depart' => ['required', 'string', 'max:255'],
            'arrivee' => ['required', 'string'],
        ]);
   
        $traject = Traject::create([
            'depart' => $request->depart,
            'arrivee' => $request->arrivee,
            'driver_id'=>Auth::user()->id,
        ]);
        
        
        return redirect('/driver-dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Traject $traject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Traject $traject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTrajectRequest $request, Traject $traject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Traject $traject)
    {
        //
    }
}