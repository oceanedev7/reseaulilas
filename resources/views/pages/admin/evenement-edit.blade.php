<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    <title>Les évènements</title>
</head>
<body class="bg-gray-200">

    <a href="{{ route('event-details', $evenement->id) }}" class="hover:underline relative top-8 left-8"> 
        <i class="fa-solid fa-arrow-left"></i>
        Revenir à la page des détails de l'évènement
    </a>

    <div class="flex flex-col items-center p-12 space-y-6"> 
        <div class="uppercase text-3xl font-black text-center">Modifier l'évènement</div>

        <div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">
            {{-- <form method="POST" action="{{ route('event-update', $evenement->id) }}" enctype="multipart/form-data">
                @csrf

                @method('PUT')
            
                <div class="mb-4">
                    <img src="{{ Storage::url($evenement->photo) }}" alt="" class="w-full h-64 object-cover rounded-lg shadow-md">
                    <input name="photo" type="file" accept="image/*" class="mt-2"/>
                </div>
            
                <div class="mb-4">
                    <label for="titre" class="block text-sm font-semibold mb-2">Titre :</label>
                    <input value="{{ $evenement->titre }}" name="titre" id="titre"
                        class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
                </div>
            
                <div class="mb-4">
                    <label for="categorie" class="block text-sm font-semibold mb-2">Catégorie :</label>
                    <select name="categorie" id="categorie" 
                        class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" 
                        required>
                        <option value="" disabled>Sélectionnez une catégorie</option>
                        <option value="Les rencontres du réseau" {{ $evenement->categorie == 'Les rencontres du réseau' ? 'selected' : '' }}>Les rencontres du réseau</option>
                        <option value="Les médias" {{ $evenement->categorie == 'Les médias' ? 'selected' : '' }}>Les médias</option>
                        <option value="Autres projets" {{ $evenement->categorie == 'Autres projets' ? 'selected' : '' }}>Autres projets</option>
                    </select>
                </div>
                
                <div class="mb-4">
                    <label for="lieu" class="block text-sm font-semibold mb-2">Lieu :</label>
                    <input value="{{ $evenement->lieu }}" name="lieu" id="lieu"
                        class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
                </div>
            
                <div class="mb-4">
                    <label for="date" class="block text-sm font-semibold mb-2">Date de l'évènement :</label>
                    <input value="{{ $evenement->date }}" type="date" name="date" id="date"
                        class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
                </div>
            
                <div class="mb-4">
                    <label for="heure_debut" class="block text-sm font-semibold mb-2">Heure du début de l'évènement :</label>
                    <input value="{{ $evenement->heure_debut }}" type="time" name="heure_debut" id="heure_debut"
                        class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
                </div>
            
                <div class="mb-4">
                    <label for="heure_fin" class="block text-sm font-semibold mb-2">Heure de fin de l'évènement :</label>
                    <input value="{{ $evenement->heure_fin }}" type="time" name="heure_fin" id="heure_fin"
                        class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
                </div>
            
                <div class="mb-4">
                    <label for="description" class="block text-sm font-semibold mb-2">Description :</label>
                    <textarea name="description" id="description"
                        class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">{{ $evenement->description }}</textarea>
                </div>
            
                <div class="mb-4">
                    <button type="submit" class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Modifier cet événement</button>
                </div>
            </form> --}}

            
    <form method="POST" action="{{ route('event-update', $evenement->id) }}" enctype="multipart/form-data">
        @csrf
    

        <div class="mb-4">
            <label for="titre" class="block text-sm font-semibold mb-2">Titre :</label>
            <input type="text" name="titre" id="titre" value="{{$evenement->titre}}" 
                   class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" 
                   >
        </div>

        <div class="mb-4">
            <label for="categorie" class="block text-sm font-semibold mb-2">Catégorie :</label>
            <select name="categorie" id="categorie" 
                    class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" 
                  >
                <option value="" disabled>Sélectionnez une catégorie</option>
                <option value="Les rencontres du réseau" {{ $evenement->categorie == 'Les rencontres du réseau' ? 'selected' : '' }}>Les rencontres du réseau</option>
                <option value="Les médias" {{ $evenement->categorie == 'Les médias' ? 'selected' : '' }}>Les médias</option>
                <option value="Autres projets" {{ $evenement->categorie == 'Autres projets' ? 'selected' : '' }}>Autres projets</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="photo" class="block text-sm font-semibold mb-2">Photo :</label>
            
                <img src="{{ Storage::url($evenement->photo) }}" alt="Photo de l'événement" class="w-full h-64 object-cover rounded-lg shadow-md mb-4">
            <input type="file" name="photo"  
                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" 
                   accept="image/*">
        </div>

        <div class="mb-4">
            <label for="lieu" class="block text-sm font-semibold mb-2">Lieu :</label>
            <input type="text" name="lieu"  value="{{ $evenement->lieu }}" 
                   class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" 
                   >
        </div>

        <div class="mb-4">
            <label for="date" class="block text-sm font-semibold mb-2">Date de l'événement :</label>
            <input type="date" name="date" id="date" value="{{ $evenement->date }}" 
                   class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" 
                   >
        </div>

        <div class="mb-4">
            <label for="heure_debut" class="block text-sm font-semibold mb-2">Heure de début :</label>
            <input type="time" name="heure_debut" id="heure_debut" value="{{$evenement->heure_debut}}" 
                   class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" 
                   >
        </div>

        <div class="mb-4">
            <label for="heure_fin" class="block text-sm font-semibold mb-2">Heure de fin :</label>
            <input type="time" name="heure_fin" id="heure_fin" value="{{$evenement->heure_fin}}" 
                   class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold mb-2">Description :</label>
            <textarea name="description" id="description" 
                      class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" 
                      >{{  $evenement->description}}</textarea>
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Mettre à jour l'événement</button>
        </div>
    </form>
            
        </div>
    </div>

</body>
</html>
