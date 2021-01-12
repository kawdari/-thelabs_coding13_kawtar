<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Testi;
use Illuminate\Http\Request;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testi::all();
        return view('admin.testimonials.testimonials',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams=Team::all();
        return view('admin.testimonials.create',compact('teams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newTestimonial= new Testi;
        $newTestimonial->avis=$request->avis;
        $newTestimonial->team_id=$request->team_id;
        $newTestimonial->save();
        return redirect('/testimonials');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function show(Testi $testi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teams=Team::all();
        $testimonial=Testi::find($id);
        return view('admin.testimonials.edit',compact('testimonial','teams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateTesti=Testi::find($id);
        $updateTesti->avis = $request->avis;
        $updateTesti->team_id = $request->team_id;
        $updateTesti->save();
        return redirect('/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testi  $testi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Testi::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
