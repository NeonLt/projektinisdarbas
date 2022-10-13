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
        $validate = $request->validate([
            'name' => 'required|unique:countries|max:100',
            'country_name' => 'required|unique:countries|max:100',
            'latitude' => 'required|unique:airports|max:100',
            'longtitude' => 'required|unique:airports|max:100',
            'country_id' =>  'required|unique:airports|max:100',
        ]);

        airports::create([
            'name' => request('name'),
            'country_name' => request('country_name'),
            'latitude' => request('latitude'),
            'longtitude' => request('longtitude'),
            'country_id' => request('country_id'),
        ]);
        return redirect('/Avalinijos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function show(airports $airports)
    {
        return view('Avalinijos', compact('airports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function edit(airports $airports)
    {
        return view('Avalinijos_edit', compact('airports'));
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
        $request->validate([
            'name' => 'required|unique:countries|max:100',
            'country_name' => 'required|unique:countries|max:100',
            'latitude' => 'required|unique:countries|max:100',
            'longtitude' => 'required|unique:countries|max:100',
            'country_id' => 'required|unique:countries|max:100',
        ]);

        countries::where('id', $countries->id)->update($request->only(['name', 'country_name', 'latitude', 'longtitude', 'country_id']));
        return redirect('/Avalinijos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function destroy(airports $airports)
    {
        $airports->delete();

        return redirect('/Avalinijos');
    }
}
