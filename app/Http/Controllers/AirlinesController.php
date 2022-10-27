<?php

namespace App\Http\Controllers;

use App\Models\airline;
use App\Http\Requests\StoreAirlineRequest;
use App\Http\Requests\UpdateAirlineRequest;
use App\Models\Airlines;
use App\Policies\AirlinesPolicy;
use App\Models\countries;
use App\Models\Airports;


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
        $airports = Airports::all();

        return view('oro_linijos', compact('airlines', 'airports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airlines = Airlines::all();
        $country = countries::all();

        return view('oro_linijos_New', compact('airlines', 'country' ));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $airlines = Airlines::all();
        $country = countries::all();

        return view('oro_linijos_add', compact('airlines', 'country' ));
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
            // 'country_id' => 'required|max:100',
            'country_name' => 'required|max:100',
        ]);

        airlines::create([
            'name' => request('name'),
            // 'country_id' => request('country_id'),
            'country_name' => request('country_name'),
        ]);
        return redirect('/');
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
        $country = countries::all();
        $airlines = Airlines::all();

        return view('oro_linijos_edit', compact('country', 'airlines'));
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

        Airlines::where('id', $airlines->id)->update($request->only(['name',  'country_name']));
        return redirect('/');
    }


        /**
     * Display the specified resource.
     *
     * @param  \App\Models\airlines  $airports
     * @return \Illuminate\Http\Response
     */
    public function search(Airlines $airlines)
    {

        return view('oro_linijos_ieskoti');

    }


      /**
     * Display the specified resource.
     *
     * @param  \App\Models\airlines  $airports
     * @return \Illuminate\Http\Response
     */
    public function delete(Airlines $airlines)
    {

        return view('oro_linijos_delete', compact('airlines'));

    }

       /**
     * Display the specified resource.
     *
     * @param  \App\Models\airlines  $airports
     * @return \Illuminate\Http\Response
     */
    public function confirm(Airlines $airlines)
    {
        $airlines = Airlines::all();
        $airports = Airports::all();
        

        return view('oro_linijos_istrynti', compact('airlines', 'airports'));

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
            
        return redirect('/');
    }
}
