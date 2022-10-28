<?php

namespace App\Http\Controllers;

use App\Models\Airports;
use App\Http\Requests\StoreairportsRequest;
use App\Http\Requests\UpdateairportsRequest;
use App\Policies\AirportsPolicy;
use Symfony\Contracts\Service\Attribute\Required;

class AirportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airports = Airports::all();

        return view('Avialinijos', compact('airports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Avialinijos_new');
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
            'name_ava' => 'required|max:100',
            'country_name' => 'required|max:100',
            'latitude' => 'required|max:100',
            'longtitude' => 'required|max:100',
            'airline_pavadinimas' => 'max:50',
            //'country_id' =>  'required|max:100',
        ]);

        airports::create([
            'name_ava' => request('name_ava'),
            'country_name' => request('country_name'),
            'latitude' => request('latitude'),
            'longtitude' => request('longtitude'),
            'airline_pavadinimas' => request('airline_pavadinimas'),
            //'country_id' => request('country_id'),
        ]);
        return redirect('/Avialinijos');
    }

    public function airports_add_airline_post(UpdateairportsRequest $request, airports $airports){

        $validate = $request->validate([
        'airline_pavadinimas' => 'Required'
    ]);
    Airports::where('id', $airports->id)->update($request->only(['airline_pavadinimas']));

    return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function show(airports $airports)
    {
        //return view('Avialinijos', compact('airports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function edit(airports $airports)
    {
        return view('Avialinijos_edit', compact('airports'));
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

        Airports::where('id', $airports->id)->update($request->only(['name_ava', 'country_name', 'latitude', 'longtitude', 'country_id', 'airline_pavadinimas']));
        return redirect('/Avialinijos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\airports  $airports
     * @return \Illuminate\Http\Response
     */
    public function delete(Airports $airports)
    {

        return view('Avialinijos_delete', compact('airports'));

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

        return redirect('/Avialinijos');
    }
}
