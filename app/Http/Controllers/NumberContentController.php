<?php

namespace App\Http\Controllers;

use App\Models\Number_content;
use Illuminate\Http\Request;

class NumberContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $numbers = Number_content::all();

        return view('pages.admin.number-content', [
            'numbers' => $numbers,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $existingMissionsCount = Number_content::count();

        if ($existingMissionsCount >= 4) {
            return redirect("/espaceadmin/number-content")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus de 4 données.',
            ]);
        }

        $validatedData = $request->validate([
            'chiffre' => 'required|integer',
            'titre' => 'required|string',
            
        ]);
    
        Number_content::create($validatedData);
        
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
        $number = Number_content::findOrFail($id); 
        return view("pages.admin.number-edit", compact('number'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'chiffre' => 'integer',
            'titre' => 'string',
        ]
    );
    
        $review = Number_content::findOrFail($id);
    
        $review->chiffre = $request->input('chiffre');
        $review->titre = $request->input('titre');
       
        $review->save();
    
            return redirect('/espaceadmin/number-content');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
