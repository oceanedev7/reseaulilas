<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission_content;
use App\Models\About_content;
use App\Models\Number_content;
use App\Models\Team_content;

class NousdecouvrirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutcontentView = About_content::first();
        $missionsView = Mission_content::all();
        $numbersView = Number_content::all();
        $teamsView = Team_content::all();

        return view('pages.guest.nousdecouvrir', [
            'aboutcontentView' => $aboutcontentView,
            'missionsView' => $missionsView,
            'numbersView' => $numbersView,
            'teamsView' => $teamsView,


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
        //
    }
}
