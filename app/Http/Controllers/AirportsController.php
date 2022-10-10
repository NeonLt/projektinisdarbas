<?php

namespace App\Http\Controllers;

use App\Models\airports;
use App\Http\Requests\StoreairportsRequest;
use App\Http\Requests\UpdateairportsRequest;

class AirportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Avalinijos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Avalinijos_New');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreairportsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreairportsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function show(airports $airports)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function edit(airports $airports)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateairportsRequest  $request
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateairportsRequest $request, airports $airports)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function destroy(airports $airports)
    {
        //
    }
}
