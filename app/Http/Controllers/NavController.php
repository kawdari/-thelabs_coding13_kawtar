<?php

namespace App\Http\Controllers;

use App\Models\Nav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbar = Nav::all();
        return view('admin.navbar.navbar-logo', compact('navbar'));
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
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function show(Nav $nav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function edit(Nav $nav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nav $nav)
    {
        $updateLogo = new Nav();
        $updateLogo->logo = $request->file('logo')->hashName();
        $updateLogo->save();
        $request->file('logo')->storePublicly('images', 'public');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nav $nav)
    {
        //
    }
}
