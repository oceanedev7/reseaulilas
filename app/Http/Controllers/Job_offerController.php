<?php

namespace App\Http\Controllers;

use App\Models\Job_offers;
use Illuminate\Http\Request;

class Job_offerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emplois = Job_offers::all();

        return view('pages.admin.offre-emploi', [
            'emplois' => $emplois,
    
        ]);
    }

    public function indexView()
    {
        $emploisView = Job_offers::all();

        return view('pages.guest.recrutement-liste', [
            'emploisView' => $emploisView,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd ($request);
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'qualification' => 'required|string',
            'mission' => 'required|string',
            'lieu' => 'required|string',
            'salaire' => 'nullable|numeric',
            'type_contrat' => 'required|string', 
            'telephone' => 'required|string',  
            'email' => 'required|string', 
        ]);
    
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $validatedData['photo'] = $path; 
        }
    
        Job_offers::create($validatedData);
    
        
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
       $emploi = Job_offers::findOrFail($id); 
        // dd($edit);
        return view("pages.admin.offre-emploi-details", compact('emploi'));
    }

    public function showView(string $id)
    {
       $emploiView = Job_offers::findOrFail($id); 
        // dd($edit);
        return view("pages.guest.recrutement-detail", compact('emploiView'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $emploi=Job_offers::findOrFail($id); 
        return view("pages.admin.offre-emploi-edit", compact('emploi'));
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
            'qualification' => 'string',
            'mission' => 'string',
            'lieu' => 'string',
            'salaire' => 'nullable|numeric',
            'type_contrat' => 'string', 
            'telephone' => 'string',  
            'email' => 'string', 
        ]);
    
        $emploi = Job_offers::findOrFail($id);
      
        if ($request->hasFile('photo')) {
    
            $path = $request->file('photo')->store('public/images');
            $emploi->photo = $path;
        }
    
        $emploi->titre = $request->input('titre');
        $emploi->description = $request->input('description');
        $emploi->qualification = $request->input('qualification');
        $emploi->mission = $request->input('mission');
        $emploi->lieu = $request->input('lieu');
        $emploi->salaire = $request->input('salaire');
        $emploi->type_contrat = $request->input('type_contrat');
        $emploi->telephone = $request->input('telephone');
        $emploi->email = $request->input('email');

    
        $emploi->save();
    
            return redirect('/espaceadmin/offre-emploi/details/' . $emploi->id);
        }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete  = Job_offers::findOrFail($id);
        $delete->delete();

        return redirect("/espaceadmin/offres-emploi");
    }
}
