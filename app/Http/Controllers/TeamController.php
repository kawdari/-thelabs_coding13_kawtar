<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamTitle;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams=Team::all();
        $teamTitle=TeamTitle::all();
        return view("admin.team.team",compact('teams','teamTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.createTeam');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teamMembre = new Team;
        $teamMembre->image = $request->file('image')->hashName();
        $teamMembre->name=$request->name;
        $teamMembre->function=$request->function;
        $teamMembre->save();
        $request->file('image')->storePublicly('img/team', 'public');
        return redirect('/team');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team=Team::find($id);
        return view('admin.team.editTeam',compact('team'));
    }
    public function editTitle($id)
    {
        $teamTitle=TeamTitle::find($id);
        return view('admin.team.edit',compact('teamTitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Team::find($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
        }
        $update->image = $request->file('image')->hashName();
        $update->name=$request->name;
        $update->function=$request->function;
        $update->save();
        // Storage::disk('public')->delete('img/team/' . $update->image);
        $request->file('image')->storePublicly('img/team', 'public');
        return redirect('/team');
    }

    public function updateTitle(Request $request, $id)
    {
        $updateTitle = TeamTitle::find($id);
        $updateTitle->titre=$request->titre;
        $updateTitle->save();
        return redirect('/team');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Team::find($id);
        $delete->delete();
        return redirect()->back();
    }
}
