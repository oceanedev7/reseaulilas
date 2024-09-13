<?php

namespace App\Http\Controllers;

use App\Models\Volunteer_content;
use Illuminate\Http\Request;

class VolunteerContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $volunteers = Volunteer_content::all();

        return view('pages.admin.volunteer-content', [
            'volunteers' => $volunteers,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $existingMissionsCount = Volunteer_content::count();

        if ($existingMissionsCount >= 1) {
            return redirect("/espaceadmin/volunteer-content")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus d\'une donnée.',
            ]);
        }

        $request->validate(
            [
            'description' => 'required|string|max:850',
            ],
            [
                'description.max' => 'La description ne doit pas dépasser 850 caractères.', 
            ]);

         Volunteer_content::create($request->all());
 
    return redirect("/espaceadmin/volunteer-content");
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
        $volunteer=Volunteer_content::findOrFail($id); 
        return view("pages.admin.volunteer-content-edit", compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'description' => 'required|string|max:850',
        ],
        [
            'description.max' => 'La description ne doit pas dépasser 850 caractères.', 
        ]
    );
    
        $volunteer = Volunteer_content::findOrFail($id);
    
        $volunteer->description = $request->input('description');
       
        $volunteer->save();
    
            return redirect('/espaceadmin/volunteer-content');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
