<?php

namespace App\Http\Controllers;

use App\Models\temas;
use App\Http\Requests\StoretemasRequest;
use App\Http\Requests\UpdatetemasRequest;

class TemasController extends Controller
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
     * @param  \App\Http\Requests\StoretemasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretemasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function show(temas $temas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function edit(temas $temas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetemasRequest  $request
     * @param  \App\Models\temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetemasRequest $request, temas $temas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\temas  $temas
     * @return \Illuminate\Http\Response
     */
    public function destroy(temas $temas)
    {
        //
    }
}
