<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Caroussel;
use App\Models\TextCaroussel;
use App\Models\TexteCaroussel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarousselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imgCaroussel = Caroussel::all();
        return view("admin.caroussel.img.image", compact('imgCaroussel'));
    }

    public function indexText()
    {
        $texteCaroussel = TexteCaroussel::all();
        return view("admin.caroussel.texte.texte", compact('texteCaroussel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.caroussel.img.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $NewCaroussel = new Caroussel;
        $NewCaroussel->image = $request->file('image')->hashName();
        $NewCaroussel->save();
        $request->file('image')->storePublicly('img', 'public');
        return redirect('/carousselImage');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function show(Caroussel $caroussel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imgCaroussel = Caroussel::find($id);
        return view('admin.caroussel.img.edit', compact('imgCaroussel'));
    }

    public function editTexte($id)
    {
        $textss = TexteCaroussel::find($id);
        return view('admin.caroussel.texte.edit', compact('textss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateCaroussel = Caroussel::find($id);
        $updateCaroussel->image = $request->file('image')->hashName();
        $updateCaroussel->save();
        Storage::disk('public')->delete('img/' . $updateCaroussel->image);
        $request->file('image')->storePublicly('img', 'public');
        return redirect('/');
    }

    public function updateTexte(Request $request, $id)
    {
        $updateTexteCaroussel = TexteCaroussel::find($id);
        $updateTexteCaroussel->texte = $request->texte;
        $updateTexteCaroussel->save();
        return redirect('/carousselTexte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Caroussel  $caroussel
     * @return \Illuminate\Http\Response
     */
    public function destroy(C$id)
    {
        $delete = Caroussel::find($id);
        Storage::disk('public')->delete('img/' . $delete->image);
        $delete->delete();
        return redirect()->back();
    }
}
