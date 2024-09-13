<?php

namespace App\Http\Controllers;

use App\Models\Partner_content;
use Illuminate\Http\Request;

class PartnerContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partners = Partner_content::all();

        return view('pages.admin.partner-content', [
            'partners' => $partners,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $existingMissionsCount = Partner_content::count();

        if ($existingMissionsCount >= 1) {
            return redirect("/espaceadmin/partner-content")->withErrors([
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

         Partner_content::create($request->all());
 
    return redirect("/espaceadmin/partner-content");
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
        $partner=Partner_content::findOrFail($id); 
        return view("pages.admin.partner-content-edit", compact('partner'));
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
    
        $partner = Partner_content::findOrFail($id);
    
        $partner->description = $request->input('description');
       
        $partner->save();
    
            return redirect('/espaceadmin/partner-content');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
