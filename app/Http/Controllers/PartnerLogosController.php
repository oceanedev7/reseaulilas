<?php

namespace App\Http\Controllers;

use App\Models\Partner_logo;
use Illuminate\Http\Request;

class PartnerLogosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = Partner_logo::all();

        return view('pages.admin.partner-logos', [
            'logos' => $logos,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public/images');
            $validatedData['photo'] = $path; 
        }
    
        Partner_logo::create($validatedData);
    
        
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
        $delete  = Partner_logo::findOrFail($id);
        $delete->delete();

        return redirect("/espaceadmin/partner-logos");
    }
}
