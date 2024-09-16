<?php

namespace App\Http\Controllers;

use App\Models\Join_network;
use Illuminate\Http\Request;

class NetworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $networks = Join_network::all();

        return view('pages.admin.networks', [
            'networks' => $networks,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)

    {

        $existingMissionsCount = Join_network::count();

        if ($existingMissionsCount >= 3) {
            return redirect("/espaceadmin/network")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus de 3 données.',
            ]);
        }

        $request->validate(
            [
            'description' => 'required|string|max:160',
            ],
            [
                'description.max' => 'La description ne doit pas dépasser 160 caractères.', 
            ]
        
        
        );

         Join_network::create($request->all());
 
    return redirect("/espaceadmin/network");
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
        $network=Join_network::findOrFail($id); 
        return view("pages.admin.network-edit", compact('network'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
    
            'description' => 'required|string|max:150',
        ],
        [
            'description.max' => 'La description ne doit pas dépasser 150 caractères.', 
        ]

    );
    
        $network = Join_network::findOrFail($id);
    
        $network->description = $request->input('description');
       
        $network->save();
    
            return redirect('/espaceadmin/network');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
