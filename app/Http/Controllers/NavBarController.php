<?php

namespace App\Http\Controllers;

use App\Models\NavBar;
use Illuminate\Http\Request;

class NavBarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navbars = Navbar::all();
        return view('admin.navbar.navbar-logo', compact('navbars'));
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
     * @param  \App\Models\NavBar  $navBar
     * @return \Illuminate\Http\Response
     */
    public function show(NavBar $navBar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NavBar  $navBar
     * @return \Illuminate\Http\Response
     */
    public function edit(NavBar $navBar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NavBar  $navBar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NavBar $navBar)
    {
        $updateLogo = new Navbar();
        $updateLogo->logo = $request->file('logo')->hashName();
        $updateLogo->save();
        $request->file('logo')->storePublicly('images', 'public');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NavBar  $navBar
     * @return \Illuminate\Http\Response
     */
    public function destroy(NavBar $navBar)
    {
        //
    }
}
