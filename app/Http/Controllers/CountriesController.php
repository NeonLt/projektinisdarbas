<?php

namespace App\Http\Controllers;

use App\Models\countries;
use App\Http\Requests\StorecountriesRequest;
use App\Http\Requests\UpdatecountriesRequest;

class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Salys');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.countries.add_countries');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecountriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecountriesRequest $request)
    {
        $validate = $request->validate([
            'countries' => 'required|unique:countries|max:100',
            'ISO' => 'required|unique:countries|min:3|max:3',
        ]);

        Countries::create([
            'countries' => request('countries'),
            'ISO' => request('ISO'),
        ]);
        return redirect('/Salys');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function show(countries $countries)
    {
        $countries =countries::paginate('6');

        return view('pages.countries.Salys', compact('countries'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function edit(countries $countries)
    {
        return view('pages.countries.Salys_edit', compact('countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecountriesRequest  $request
     * @param  \App\Models\countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecountriesRequest $request, countries $countries)
    {
        $request->validate([
            'countries' => 'required|unique:countries|max:100',
            'ISO' => 'required|unique:countries|min:3|max:3',
        ]);

        Countries::where('id', $countries->id)->update($request->only(['country', 'ISO']));
        return redirect('/Salys');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\countries  $countries
     * @return \Illuminate\Http\Response
     */
    public function destroy(countries $countries)
    {
        $countries ->delete();

        return redirect('/Salys');
    }
}
