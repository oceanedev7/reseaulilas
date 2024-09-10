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

    <title>Les actualités</title>
</head>
<body class="bg-gray-200">

    
<a href="{{route ('actu-detail', $actualite->id)}}" class="hover:underline relative top-8 left-8"> 
    <i class="fa-solid fa-arrow-left"></i>
    Revenir à la page des détails de l'actualité
</a>

<div class="flex flex-col items-center p-12 space-y-6"> 
    <div class="uppercase text-3xl font-black text-center"> Modifier l'actualité</div>

    <div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">
    <form method="POST" action="{{route ('actu-update', $actualite->id)}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="titre" class="block text-sm font-semibold  mb-2">Titre :</label>
            <input value="{{ $actualite->titre }}" name="titre" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
        </div>
        
        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold  mb-2">Description :</label>
            <textarea name="description" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >{{ $actualite->description }}</textarea>
        </div>
        
        <div class="mb-4">
            <label for="photo" class="block text-sm font-semibold  mb-2">Photo :</label>
            <img src="{{ Storage::url($actualite->photo) }}" alt="Photo de l'emploi" class="w-full h-64 object-cover rounded-lg shadow-md">
            <input class="" aria-describedby="user_avatar_help" name="photo" type="file" accept="image/*"/>

        </div>
       
        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Modifier cette actualité</button>
        </div>
    </form>
    </div>
</div>
</body>
</html>