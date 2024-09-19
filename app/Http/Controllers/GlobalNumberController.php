<?php

namespace App\Http\Controllers;

use App\Models\Global_number_content;
use Illuminate\Http\Request;

class GlobalNumberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $globals = Global_number_content::all();

        return view('pages.admin.global-numbers', [
            'globals' => $globals,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $existingMissionsCount = Global_number_content::count();

        if ($existingMissionsCount >= 4) {
            return redirect("/espaceadmin/global-numbers")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus de 4 données.',
            ]);
        }

        $request->validate(
            [
            'titre' => 'required|string',
            'description' => 'required|string',
            ]);

         Global_number_content::create($request->all());
 
    return redirect("/espaceadmin/global-numbers");
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
        $global=Global_number_content::findOrFail($id); 
        return view("pages.admin.global-number-edit", compact('global'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' => 'string',
            'description' => 'string',
        ]);
    
        $global = Global_number_content::findOrFail($id);
    
        $global->titre = $request->input('titre');
        $global->description = $request->input('description');
       
        $global->save();
    
            return redirect('/espaceadmin/global-numbers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
