<?php

namespace App\Http\Controllers;

use App\Models\Blogpost;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('labs.blog-post');
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
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function show(Blogpost $blogpost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogpost $blogpost)
    {
        //
    }



    public function links(Navbar $navbar) 
    {
        $navbars = Navbar::all();
        return view('admin.navbar.navbar-links', compact('navbars'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogpost $blogpost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blogpost  $blogpost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogpost $blogpost)
    {
        //
    }
}
