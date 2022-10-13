<?php

namespace App\Http\Controllers;

use App\Models\airline;
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
        return view('Avialinijos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Avialinijos_New');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreairlineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreairlineRequest $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:name|max:100',
            'country_id' => 'required|unique:country_id|max:100',
        ]);

        airlines::create([
            'name' => request('name'),
            'country_id' => request('country_id'),
        ]);
        return redirect('/Avialinijos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\airline  $airlines
     * @return \Illuminate\Http\Response
     */
    public function show(airlines $airlines)
    {
        return view('Avialinijos', compact('airlines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\airline  $airlines
     * @return \Illuminate\Http\Response
     */
    public function edit(airlines $airlines)
    {
        return view('Avialinijos', compact('airlines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAirlineRequest  $request
     * @param  \App\Models\airline  $airlines
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAirlineRequest $request, airlines $airlines)
    {
        $request->validate([
            'name' => 'required|unique:name|max:100',
            'country_id' => 'required|unique:country_id|max:100',
        ]);

        countries::where('id', $airlines->id)->update($request->only(['name', 'country_id']));
        return redirect('/Avialinijos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\airline  $airlines
     * @return \Illuminate\Http\Response
     */
    public function destroy(airlines $airlines)
    {
        $airlines->delete();

        return redirect('/Avialinijos');
    }
}
