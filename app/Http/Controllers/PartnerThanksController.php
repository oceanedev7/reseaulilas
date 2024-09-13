<?php

namespace App\Http\Controllers;

use App\Models\Partner_thanks_content;
use Illuminate\Http\Request;

class PartnerThanksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $descriptions = Partner_thanks_content::all();

        return view('pages.admin.partner-thanks', [
            'descriptions' => $descriptions,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $existingMissionsCount = Partner_thanks_content::count();

        if ($existingMissionsCount >= 1) {
            return redirect("/espaceadmin/partner-thanks")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus d\'une donnée.',
            ]);
        }

        $request->validate(
            [
            'description'=>'required|string|max:990',
        ],
        [
            'description.max' => 'La description ne doit pas dépasser 990 caractères.', 
        ]);

         Partner_thanks_content::create($request->all());
 
    return redirect("/espaceadmin/partner-thanks");
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
        $description=Partner_thanks_content::findOrFail($id); 
        return view("pages.admin.partner-thanks-edit", compact('description'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([

            'description' => 'required|string|max:990',
        ],
        [
            'description.max' => 'La description ne doit pas dépasser 990 caractères.', 
        ]);
    
        $description = Partner_thanks_content::findOrFail($id);
      
        $description->description = $request->input('description');
    
        $description->save();
    
        return redirect('/espaceadmin/partner-thanks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
