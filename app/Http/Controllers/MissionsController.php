<?php

namespace App\Http\Controllers;

use App\Models\Mission_content;
use Illuminate\Http\Request;

class MissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $missions = Mission_content::all();

        return view('pages.admin.missions', [
            'missions' => $missions,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create (Request $request)
    {

        $existingMissionsCount = Mission_content::count();

        if ($existingMissionsCount >= 4) {
            return redirect("/espaceadmin/missions")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus de 4 missions.',
            ]);
        }
        
        $request->validate(
            [
            'titre' => 'required|string|max:45',
            'description' => 'required|string|max:265',
            ],
            [
                'titre.max' => 'La description ne doit pas dépasser 45 caractères.', 
                'description.max' => 'La description ne doit pas dépasser 265 caractères.', 
            ]);

         Mission_content::create($request->all());
 
    return redirect("/espaceadmin/missions");
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
        $mission=Mission_content::findOrFail($id); 
        return view("pages.admin.mission-edit", compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'titre' => 'required|string|max:45',
            'description' => 'required|string|max:265',
        ],
        [
            'titre.max' => 'La description ne doit pas dépasser 45 caractères.', 
            'description.max' => 'La description ne doit pas dépasser 265 caractères.', 
        ]
    );
    
        $mission = Mission_content::findOrFail($id);
    
        $mission->titre = $request->input('titre');
        $mission->description = $request->input('description');
       
        $mission->save();
    
            return redirect('/espaceadmin/missions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
