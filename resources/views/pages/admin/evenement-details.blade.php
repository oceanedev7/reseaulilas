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

<a href="{{route ('event')}}" class="hover:underline relative top-8 left-8"> 
    <i class="fa-solid fa-arrow-left"></i>
     Revenir à la page des évènements
</a>
    <div class="p-6 bg-white shadow-lg rounded-lg max-w-xl mx-auto custom-shadow">
        <div class="mb-4">
            <img src="{{ Storage::url($evenement->photo) }}" alt="" class="w-full h-64 object-cover rounded-lg shadow-md">
        </div> 
        
        <div class="flex space-x-2">
            <label class="block font-bold">Titre : </label>
            <h2>{{ $evenement->titre }}</h2>
        </div>

        <div class="flex space-x-2">
            <label class="block font-bold">Catégorie : </label>
            <h2>{{ $evenement->categorie }}</h2>
        </div>

        <div class="flex space-x-2">
            <label class="block font-bold">Lieu : </label>
            <h2>{{ $evenement->lieu }}</h2>
        </div>

        <div class="flex space-x-2">
            <label class="block font-bold">Date : </label>
            <h2>{{ $evenement->date }}</h2>
        </div>

        <div class="flex space-x-2">
            <label class="block font-bold">Heure de début : </label>
            <h2>{{ $evenement->heure_debut }}</h2>
        </div>

        <div class="flex space-x-2">
            <label class="font-bold block">Heure de fin : </label>
            <h2>{{$evenement->heure_fin}}</h2>
        </div>

        <div class="flex space-x-2">
            <label class="block font-bold">Description : </label>
            <h2>{{ $evenement->description}}</h2>
        </div>
    
        <div class="flex flex-col w-full text-center mt-6">
        <a href="{{route ('event-edit', $evenement->id )}}" class="font-bold bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">Modifier</a> 
        <a href="{{ route('delete-event', $evenement->id) }}" class="font-bold bg-red-600 text-white rounded-xl py-1.5 px-4 mt-4 ">Supprimer</a> 
        </div>
    </div>
    
    
</body>
</html>