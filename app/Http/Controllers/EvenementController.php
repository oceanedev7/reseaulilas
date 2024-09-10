<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

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
        // dd($request);
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
            'categorie' => 'required|string',
            'lieu' => 'required|string|max:255',
            'date' => 'required|date',  
            'heure_debut' => 'required|date_format:H:i',  
            'heure_fin' => 'nullable|date_format:H:i',  
 
        ]);
    
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $validatedData['photo'] = $path; 
        }
    
        Agenda::create($validatedData);
    
        
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
        $evenement = Agenda::findOrFail($id); 
        return view("pages.admin.evenement-details", compact('evenement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $evenement=Agenda::findOrFail($id); 
        return view("pages.admin.evenement-edit", compact('evenement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $request->validate([
            'titre' => 'string|max:255',
            'description' => 'string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
            'categorie' => 'string',
            'lieu' => 'string|max:255',
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
        $evenement->categorie = $request->input('categorie');
        $evenement->lieu = $request->input('lieu');
        $evenement->date = $request->input('date');
        $evenement->heure_debut = $request->input('heure_debut');
        $evenement->heure_fin = $request->input('heure_fin');
        $evenement->description = $request->input('description');
        
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
