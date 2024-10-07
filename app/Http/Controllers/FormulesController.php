<?php

namespace App\Http\Controllers;

use App\Models\Formules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;


class FormulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formules = Formules::all();

        return view('pages.admin.formules', [
            'formules' => $formules,
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $existingMissionsCount = Formules::count();

        if ($existingMissionsCount >= 5) {
            return redirect("/espaceadmin/formules")->withErrors([
                'max_elements' => 'Vous ne pouvez pas créer plus de 5 formules.',
            ]);
        }

        $request->validate(
            [
            'titre' => 'required|string|max:20',
            'photo.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg', 
            'photo_pres' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'presentation' => 'required|string|max:195',
            'description1' => 'required|string|max:560',
            'description2' => 'required|string|max:560',
            'description3' => 'required|string|max:870',
            ],
            [
                'titre.max' => 'La description ne doit pas dépasser 20 caractères.', 
                'presentation.max' => 'La présentation ne doit pas dépasser 195 caractères.', 
                'description1.max' => 'La description 1 ne doit pas dépasser 560 caractères.', 
                'description2.max' => 'La description 2 ne doit pas dépasser 560 caractères.', 
                'description3.max' => 'La description 3 ne doit pas dépasser 870 caractères.', 
            ]
        );

        $paths = [];
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $path = $photo->store('public/images');
                $paths[] = $path; 
            }
        }

        $photoPresPath = null;
    if ($request->hasFile('photo_pres')) {
        $photoPresPath = $request->file('photo_pres')->store('public/images');
    }
    
        Formules::create($request->except('photo') + ['photo' => json_encode($paths),  'photo_pres' => $photoPresPath]);
        return redirect()->route('formules');

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
        $formule = Formules::findOrFail($id);

    return view('pages.admin.formule-details', compact('formule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formule=Formules::findOrFail($id); 
        return view("pages.admin.formule-edit", compact('formule'));
    }

    /**
     * Update the specified resource in storage.
     */
   
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'titre' => 'string|max:20',
                'photo.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'photo_pres' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
                'presentation' => 'string|max:195',
                'description1' => 'string|max:560',
                'description2' => 'string|max:560',
                'description3' => 'string|max:870',
            ],
            [
                'titre.max' => 'Le titre ne doit pas dépasser 20 caractères.',
                'presentation.max' => 'La présentation ne doit pas dépasser 195 caractères.',
                'description1.max' => 'La description 1 ne doit pas dépasser 560 caractères.',
                'description2.max' => 'La description 2 ne doit pas dépasser 560 caractères.',
                'description3.max' => 'La description 3 ne doit pas dépasser 870 caractères.',
            ]
        );
    
        $formule = Formules::findOrFail($id);
    
      
        $paths = json_decode($formule->photo, true) ?? [];
    
        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $photo) {
                $path = $photo->store('public/images');
                $paths[] = $path;
            }
        }
    
        if ($request->hasFile('photo_pres')) {
          
            $photoPresPath = $request->file('photo_pres')->store('public/images');
            $formule->photo_pres = $photoPresPath; 
        }


        $formule->update($request->except('photo', 'photo_pres') + ['photo' => json_encode($paths)]);
    
        return redirect('/espaceadmin/formule/details/' . $formule->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete  = Formules::findOrFail($id);
        $delete->delete();

        return redirect("/espaceadmin/formules");
    }

public function deleteAllPhotos($id)
{
    try {
        // Vérifiez si la formule existe
        $formule = Formules::findOrFail($id);
        
        Log::info('Suppression des photos pour la formule : ' . $id);
        Log::info('Formule récupérée : ' . json_encode($formule));

        // Vérifiez si des photos existent dans la colonne 'photo'
        if ($formule->photo) {
            // Décoder la chaîne JSON pour obtenir un tableau de photos
            $photos = json_decode($formule->photo);

            if (is_array($photos)) {
                foreach ($photos as $photo) {
                    // Supprimez l'image du stockage
                    $photoPath = trim($photo);
                    Log::info('Suppression de l\'image : ' . $photoPath);
                    
                    // Vérifiez si le fichier existe avant de tenter de le supprimer
                    if (Storage::exists($photoPath)) {
                        Storage::delete($photoPath); // Supprime le fichier du stockage
                    } else {
                        Log::warning('Le fichier n\'existe pas : ' . $photoPath);
                    }
                }

                // Réinitialisation de la colonne photo dans la base de données
                $formule->photo = ''; // Réinitialise la colonne 'photo' à une chaîne vide
                $formule->save(); // Sauvegarde les modifications
            } else {
                Log::warning('Erreur lors du décodage des photos pour la formule : ' . $id);
            }
        } else {
            Log::warning('Aucune photo à supprimer pour la formule : ' . $id);
        }

        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        Log::error('Erreur lors de la suppression des photos : ' . $e->getMessage());
        return response()->json(['error' => 'Erreur lors de la suppression des photos.'], 500);
    }
}



    }
    

    
