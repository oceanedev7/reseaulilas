<?php

namespace App\Http\Controllers;

use App\Models\Formules;
use Illuminate\Http\Request;

class FormulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formules = Formules::all();

        return view('pages.admin.formules', [
            'formules' => $formules,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
        public function create(Request $request)
    {
        $request->validate(
            [
            'titre' => 'required|string|max:20',
            'photo.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg', 
            'presentation' => 'required|string|max:195',
            'description1' => 'required|string|max:560',
            'description2' => 'required|string|max:560',
            'description3' => 'required|string|max:870',
            ],
            [
                'titre.max' => 'La description ne doit pas dépasser 20 caractères.', 
                'presentation.max' => 'La présentation ne doit pas dépasser 195 caractères.', 
                'description1.max' => 'La description 1 ne doit pas dépasser 560 caractères.', 
                'description2.max' => 'La description 2 ne doit pas dépasser 560 caractères.', 
                'description3.max' => 'La description 3 ne doit pas dépasser 870 caractères.', 
            ]
        );

        $paths = [];
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $path = $photo->store('public/images');
                $paths[] = $path; 
            }
        }
    
        Formules::create($request->except('photo') + ['photo' => json_encode($paths)]);
 
    return redirect("/espaceadmin/formules");

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
        $formule = Formules::findOrFail($id);

    return view('pages.admin.formule-details', compact('formule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
