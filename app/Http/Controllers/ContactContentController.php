<?php

namespace App\Http\Controllers;

use App\Models\Contact_content;
use Illuminate\Http\Request;

class ContactContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact_content::all();

        return view('pages.admin.contact-content', [
            'contacts' => $contacts,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $existingMissionsCount = Contact_content::count();

        if ($existingMissionsCount >= 1) {
            return redirect("/espaceadmin/contact-content")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus d\'une donnée.',
            ]);
        }

        $request->validate(
            [
            'horaire' => 'required|string',
            'adresse' => 'required|string',
            'email' => 'required|string',
            'telephone' => 'required|string',
            ]);

         Contact_content::create($request->all());
 
    return redirect("/espaceadmin/contact-content");
       
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
        $contact=Contact_content::findOrFail($id); 
        return view("pages.admin.contact-content-edit", compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'horaire' => 'string',  
            'adresse' => 'string',  
            'telephone' => 'string',  
            'email' => 'string', 
        ]);
    
        $contact = Contact_content::findOrFail($id);
      
        $contact->horaire = $request->input('horaire');
        $contact->adresse = $request->input('adresse');
        $contact->telephone = $request->input('telephone');
        $contact->email = $request->input('email');

        $contact->save();
    
            return redirect('/espaceadmin/contact-content');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
