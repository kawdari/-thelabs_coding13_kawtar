<?php

namespace App\Http\Controllers;

use App\Models\HomeP;
use App\Models\Nav;
use Illuminate\Http\Request;

class HomePController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Nav::all(); 
        $navbar = Nav::all()[0];
        return view('labs.home', compact('logo', 'navbar'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        ////
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ////
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeP  $homeP
     * @return \Illuminate\Http\Response
     */
    public function show(HomeP $homeP)
    {
        ////
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeP  $homeP
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeP $homeP)
    {
        ////
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeP  $homeP
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeP $homeP)
    {
        ////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeP  $homeP
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeP $homeP)
    {
        ////
    }
}
