<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $reviews = Reviews::all();

        return view('pages.admin.reviews', [
            'reviews' => $reviews,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $existingMissionsCount = Reviews::count();

        if ($existingMissionsCount >= 3) {
            return redirect("/espaceadmin/reviews")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus de 3 données.',
            ]);
        }

        $request->validate(
            [
            'nom' => 'required|string',
            'description' => 'required|string|max:190',
            ],
            [
                'description.max' => 'La description ne doit pas dépasser 190 caractères.', 
            ]);

         Reviews::create($request->all());
 
    return redirect("/espaceadmin/reviews");
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
        $review=Reviews::findOrFail($id); 
        return view("pages.admin.review-edit", compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'string',
            'description' => 'required|string|max:190',
        ],
        [
            'description.max' => 'La description ne doit pas dépasser 190 caractères.', 
        ]
    );
    
        $review = Reviews::findOrFail($id);
    
        $review->nom = $request->input('nom');
        $review->description = $request->input('description');
       
        $review->save();
    
            return redirect('/espaceadmin/reviews');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
