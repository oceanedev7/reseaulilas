<?php

namespace App\Http\Controllers;

use App\Models\About_content;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutcontents = About_content::all();

        return view('pages.admin.about', [
            'aboutcontents' => $aboutcontents,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $existingMissionsCount = About_content::count();

        if ($existingMissionsCount >= 1) {
            return redirect("/espaceadmin/about")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus d\'une donnée.',
            ]);
        }

        $request->validate(
            [
            'description' => 'required|string|max:1000',
            ],
            [
                'description.max' => 'La description ne doit pas dépasser 1000 caractères.', 
            ]);

         About_content::create($request->all());
 
    return redirect("/espaceadmin/about");
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
        $aboutcontent=About_content::findOrFail($id); 
        return view("pages.admin.about-content-edit", compact('aboutcontent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'description' => 'required|string|max:1000',
        ],
        [
            'description.max' => 'La description ne doit pas dépasser 1000 caractères.', 
        ]
    );
    
        $aboutcontent = About_content::findOrFail($id);
    
        $aboutcontent->description = $request->input('description');
       
        $aboutcontent->save();
    
            return redirect('/espaceadmin/about');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
