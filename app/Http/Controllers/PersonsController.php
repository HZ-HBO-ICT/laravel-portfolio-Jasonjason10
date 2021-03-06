<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\StorepersonsRequest;
use App\Http\Requests\UpdatepersonsRequest;

class PersonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorepersonsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepersonsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $persons
     * @return \Illuminate\Http\Response
     */
    public function show(Person $persons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $persons
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $persons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepersonsRequest  $request
     * @param  \App\Models\Person  $persons
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepersonsRequest $request, Person $persons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $persons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $persons)
    {
        //
    }
}
