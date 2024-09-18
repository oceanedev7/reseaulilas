<?php

namespace App\Http\Controllers;

use App\Models\Team_content;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team_content::all();

        return view('pages.admin.team-content', [
            'teams' => $teams,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'fonction' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', 
        ]);
    
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $validatedData['photo'] = $path; 
        } else {
            $validatedData['photo'] = $team->photo ?? 'public/images/logoreseaulilas.png'; 
        }
    
        Team_content::create($validatedData);
        
        return redirect()->back();  
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $team = Team_content::findOrFail($id); 
        return view("pages.admin.team-edit", compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'prenom' => 'string',
            'nom' => 'string',
            'fonction' => 'string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        $team = Team_content::findOrFail($id);
      
        if ($request->hasFile('photo')) {
    
            $path = $request->file('photo')->store('public/images');
            $team->photo = $path;
        }
    
        $team->nom = $request->input('nom');
        $team->prenom = $request->input('prenom');
        $team->fonction = $request->input('fonction');
        
        $team->save();
    
            return redirect()->route('team-content', ['id' => $team->id]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete  = Team_content::findOrFail($id);
        $delete->delete();

        return redirect("/espaceadmin/team-content");
    }
}
