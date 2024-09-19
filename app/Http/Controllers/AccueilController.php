<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Join_network;
use App\Models\Global_number_content;
use App\Models\Partner_logo;
use App\Models\Reviews;

class AccueilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $globalsView = Global_number_content::all();
        $networksView = Join_network::all();
        $reviewsView = Reviews::all();
        $logosView = Partner_logo::all();

        return view('pages.guest.accueil', [
            'globalsView' => $globalsView,
            'networksView' => $networksView,
            'reviewsView' => $reviewsView ,
            'logosView' => $logosView,
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
