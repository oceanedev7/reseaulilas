<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $actualites = Actualite::all();
        $actualites = Actualite::paginate(9);

        return view('pages.admin.actualites', [
            'actualites' => $actualites,
    
        ]);
    }

    public function indexView()
    {
        // $actualites = Actualite::all();
        $actualitesView = Actualite::paginate(9);

        return view('pages.guest.actualites-liste', [
            'actualitesView' => $actualitesView,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg', 
        ]);
    
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $validatedData['photo'] = $path; 
        }
    
        Actualite::create($validatedData);
    
        
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
        $actualite = Actualite::findOrFail($id); 
        return view("pages.admin.actualite-details", compact('actualite'));
    }

    public function showView(string $id)
    {
        $actualiteView = Actualite::findOrFail($id); 
        return view("pages.guest.actualite-detail", compact('actualiteView'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $actualite=Actualite::findOrFail($id); 
        return view("pages.admin.actualite-edit", compact('actualite'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' => 'string',
            'description' => 'string',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        $actualite = Actualite::findOrFail($id);
      
        if ($request->hasFile('photo')) {
    
            $path = $request->file('photo')->store('public/images');
            $actualite->photo = $path;
        }
    
        $actualite->titre = $request->input('titre');
        $actualite->description = $request->input('description');
        
        $actualite->save();
    
            return redirect('/espaceadmin/actualite/details/' . $actualite->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete  = Actualite::findOrFail($id);
        $delete->delete();

        return redirect("/espaceadmin/actualites");
    }
}
