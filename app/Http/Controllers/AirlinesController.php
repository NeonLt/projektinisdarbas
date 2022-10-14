<?php

namespace App\Http\Controllers;

use App\Models\airline;
use App\Http\Requests\StoreAirlineRequest;
use App\Http\Requests\UpdateAirlineRequest;
use App\Models\Airlines;
use App\Policies\AirlinesPolicy;


class AirlinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airlines = Airlines::all();

        return view('oro_linijos', compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('oro_linijos_New');
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
            'name' => 'required|max:100',
            'country_id' => 'required|max:100',
        ]);

        airlines::create([
            'name' => request('name'),
            'country_id' => request('country_id'),
        ]);
        return redirect('/oro_linijos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\airline  $airlines
     * @return \Illuminate\Http\Response
     */
    public function show(airlines $airlines)
    {
        //return view('oro_linijos', compact('airlines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\airline  $airlines
     * @return \Illuminate\Http\Response
     */
    public function edit(airlines $airlines)
    {
        return view('oro_linijos', compact('airlines'));
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

        Airlines::where('id', $airlines->id)->update($request->only(['name', 'country_id']));
        return redirect('/oro_linijos');
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

        return redirect('/oro_linijos');
    }
}
