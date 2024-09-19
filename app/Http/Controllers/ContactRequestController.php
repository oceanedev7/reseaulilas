<?php

namespace App\Http\Controllers;

use App\Models\Contact_request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactRequestMail;
use App\Models\Contact_content;
use App\Models\Office_adress_content;

class ContactRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adressesView = Office_adress_content::all();
        $contactsView = Contact_content::all();

        return view('pages.guest.contact', [
            'adressesView' => $adressesView,
            'contactsView' => $contactsView,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
    
        Mail::to('ninaricci046@gmail.com')->send(new ContactRequestMail($data));
    
        return back()->with('success', 'Votre message a été envoyé avec succès !');
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
        //
    }
}
