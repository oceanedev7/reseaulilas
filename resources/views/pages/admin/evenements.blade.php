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
<body>
    
    <a href="{{route ('dashboard')}}" class="absolute top-8 left-10 text-3xl"> <i class="fa-solid fa-house"></i> </a>
<div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Les évènements </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-event')}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="titre" class="block text-sm font-semibold  mb-2">Titre :</label>
            <input name="titre" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

        <div class="mb-4">
            <label for="categorie" class="block text-sm font-semibold mb-2">Catégorie :</label>
            <select name="categorie" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
                <option value="" disabled selected>Sélectionnez une catégorie</option>
                <option value="Les rencontres du réseau">Les rencontres du réseau</option>
                <option value="Les médias">Les médias</option>
                <option value="Autres projets">Autres projets</option>
            </select>
        </div>
        

        <div class="mb-4">
            <label for="photo" class="block text-sm font-semibold  mb-2">Photo :</label>
            <input type="file" name="photo" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*" required>
        </div>

         <div class="mb-4">
            <label for="lieu" class="block text-sm font-semibold  mb-2">Lieu :</label>
            <input name="lieu" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required>
        </div>

        <div class="mb-4">
            <label for="date" class="block text-sm font-semibold  mb-2">Date de l'évènement :</label>
            <input type="date" name="date" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

        <div class="mb-4">
            <label for="heure" class="block text-sm font-semibold  mb-2">Heure du début de l'évènement :</label>
            <input type="date" name="heure_debut" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required>
        </div>

        <div class="mb-4">
            <label for="heure" class="block text-sm font-semibold  mb-2">Heure de fin de l'évènement :</label>
            <input type="date" name="heure_fin" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune">
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold  mb-2">Description :</label>
            <textarea name="description" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required></textarea>
        </div>

        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer un évènement</button>
        </div>
    </form>
</div>
</div>


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16 p-12"> 
    @foreach ($evenements as $evenement)
        <div class="flex flex-col space-y-6 items-center"> 
    <a href="{{route ('event-details' , $evenement->id)}}" class="bg-white max-w-xs w-full rounded-xl custom-shadow overflow-hidden relative"> 
        <div class="relative rounded-lg overflow-hidden">
            <img class="w-full h-40 object-cover"  src="{{ Storage::url($evenement->photo) }}"alt="">
            <div class="absolute top-0 left-0 right-0 h-14 z-10 flex items-center justify-center">
                <div class="absolute inset-0 bg-jaune opacity-70 z-0"></div>
                <div class="font-bold text-xl z-10 relative"> {{$evenement->date}}</div>
            </div>
            
        </div>
      
        <div class="absolute left-6 transform -translate-y-1/2 bg-jaune max-w-full rounded-lg p-1 px-3 z-20 whitespace-nowrap overflow-x-auto" style="top: 160px;">
            <span class="font-bold">  {{$evenement->categorie}}</span>
        </div>  
        
        <div class="uppercase p-8 font-black text-center overflow-hidden whitespace-normal">
            {{$evenement->titre}}
        </div>
     </a>
   <div class="flex justify-center space-x-4">
    <a href="{{route ('event-edit', $evenement->id )}}" class="font-bold bg-green-600 text-white rounded-xl px-2 py-1">Modifier</a>
    <a href="{{ route('delete-event', $evenement->id) }}" class="font-bold bg-red-600 text-white rounded-xl px-2 py-1">Supprimer</a>
    </div>

        </div>
@endforeach

</div>




</body>
</html>