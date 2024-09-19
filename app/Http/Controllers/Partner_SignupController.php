<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PartnerRequestMail;
use App\Models\Partner_content;

class Partner_SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partnerView = Partner_content::first();

        return view('pages.guest.devenirpartenaire', [
            'partnerView' => $partnerView,
    
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
            'raison_sociale' => 'required|string|max:255',
            'fonction' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'adresse_postale' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'code_postal' => 'required|string|max:10',
            'type' => 'required|string',
            'message' => 'required|string',
        ]);
    
        Mail::to('ninaricci046@gmail.com')->send(new PartnerRequestMail($data));
    
        return back()->with('success', 'Votre demande a été envoyée avec succès !');
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
