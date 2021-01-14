<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactMain;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=Contact::all();
        $Contact2=ContactMain::all();
        return view('admin.contact.contact',compact('contact','Contact2'));
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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editContact=Contact::find($id);
        return view('admin.contact.edit',compact('editContact'));
    }

    public function editMain($id)
    {
        $editContact2=ContactMain::find($id);
        return view('admin.contact.edit2',compact('editContact2'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update=Contact::find($id);
        $update->title = $request->title;
        $update->place = $request->place;
        $update->phone = $request->phone;
        $update->mail = $request->mail;
        $update->save();
        return redirect('/contact');
    }

    public function update2(Request $request,$id)
    {
        $update=ContactMain::find($id);
        $update->title = $request->titre;
        $update->texte = $request->texte;
        $update->save();
        return redirect('/contact');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
