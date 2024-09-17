<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenements = Agenda::all();

        return view('pages.admin.evenements', [
            'evenements' => $evenements,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'categorie' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'lieu' => 'required|string|max:255',
            'date' => 'required|date',
            'heure_debut' => 'required|date_format:H:i',
            'heure_fin' => 'nullable|date_format:H:i',
            'description' => 'required|string'
        ]);
    
        $path = $request->file('photo')->store('public/images');
    
        $evenement = new Agenda([
            'titre' => $request->input('titre'),
            'categorie' => $request->input('categorie'),
            'photo' => $path,
            'lieu' => $request->input('lieu'),
            'date' => $request->input('date'),
            'heure_debut' => $request->input('heure_debut'),
            'heure_fin' => $request->input('heure_fin'),
            'description' => $request->input('description')
        ]);
    
        $evenement->save();
    
        return redirect()->route('event-details', ['id' => $evenement->id]);
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
        $evenement = Agenda::findOrFail($id); 
        // dd($evenement);
        return view("pages.admin.evenement-details", compact('evenement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evenement = Agenda::findOrFail($id);
        return view('pages.admin.evenement-edit', compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $request->validate([
            'titre' => 'string',
            'description' => 'string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'categorie' => 'string',
            'lieu' => 'string',
            'date' => 'date',  
            'heure_debut' => 'date_format:H:i',  
            'heure_fin' => 'nullable|date_format:H:i',  
        ]);
    
        $evenement = Agenda::findOrFail($id);
      
        if ($request->hasFile('photo')) {
    
            $path = $request->file('photo')->store('public/images');
            $evenement->photo = $path;
        }
        $evenement->titre = $request->input('titre');
        $evenement->description = $request->input('description');
        $evenement->categorie = $request->input('categorie');
        $evenement->lieu = $request->input('lieu');
        $evenement->date = $request->input('date');
        $evenement->heure_debut = $request->input('heure_debut');
        $evenement->heure_fin = $request->input('heure_fin');

        $evenement->save();
   

        return redirect('/espaceadmin/evenement/details/' . $evenement->id);

    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete  = Agenda::findOrFail($id);
        $delete->delete();

        return redirect("/espaceadmin/evenement");
    }
}
