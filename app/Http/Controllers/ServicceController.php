<?php

namespace App\Http\Controllers;

use App\Models\Servicce;
use Illuminate\Http\Request;

class ServicceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('labs.services');
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicce  $servicce
     * @return \Illuminate\Http\Response
     */
    public function show(Servicce $servicce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicce  $servicce
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicce $servicce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicce  $servicce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicce $servicce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicce  $servicce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicce $servicce)
    {
        //
    }
}
