<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Http\Requests\StoreAirlineRequest;
use App\Http\Requests\UpdateAirlineRequest;
use App\Models\Airlines;
use App\Policies\AirlinesPolicy;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('oro_linijos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAirlineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAirlineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airline  $Airlines
     * @return \Illuminate\Http\Response
     */
    public function show(Airlines $Airlines)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airline  $Airlines
     * @return \Illuminate\Http\Response
     */
    public function edit(Airlines $Airlines)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAirlineRequest  $request
     * @param  \App\Models\Airline  $airlines
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAirlineRequest $request, Airlines $airlines)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airline  $airlines
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airlines $airlines)
    {
        //
    }
}
