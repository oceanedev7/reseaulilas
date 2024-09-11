<?php

namespace App\Http\Controllers;

use App\Models\Office_adress_content;
use Illuminate\Http\Request;

class OfficeAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adresses = Office_adress_content::all();

        return view('pages.admin.office-adress', [
            'adresses' => $adresses,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
         // dd($request);
         $request->validate(
            [
            'adresse_postale'=>'required|string|min:3',
            ]);

         Office_adress_content::create($request->all());
 
    return redirect("/espaceadmin/office-adresses");
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
        $adresse=Office_adress_content::findOrFail($id); 
        return view("pages.admin.office-adress-edit", compact('adresse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $request->validate([

            'adresse_postale' => 'required|string',
            
        ]);
    
        $adresse = Office_adress_content::findOrFail($id);
      
        $adresse->adresse_postale = $request->input('adresse_postale');
    
        $adresse->save();
    
        return redirect('/espaceadmin/office-adresses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete  = Office_adress_content::findOrFail($id);
        $delete->delete();

        return redirect("/espaceadmin/office-adresses");
    }
}
