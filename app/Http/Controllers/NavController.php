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
        $nav = Nav::all();
        return view('admin.navbar.navbar-links', compact('nav'));
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
    public function edit($id)
    {
        $navbar= Nav::find($id);
        return view('admin.navbar.navbar-edit',compact('navbar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nav  $nav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateNav = Nav::find($id);
        $updateNav->nav1 = $request->nav1;
        $updateNav->nav2 = $request->nav2;
        $updateNav->nav3 = $request->nav3;
        $updateNav->nav4 = $request->nav4;
        $updateNav->save();
        return redirect('/navbar');
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
