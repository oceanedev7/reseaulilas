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

<a href="{{route ('actu')}}" class="hover:underline relative top-8 left-8"> 
    <i class="fa-solid fa-arrow-left"></i>
     Revenir à la page des actualités
</a>
    <div class="p-6 bg-white shadow-lg rounded-lg max-w-xl mx-auto custom-shadow">
        <div class="mb-4">
            <img src="{{ Storage::url($actualite->photo) }}" alt="" class="w-full h-64 object-cover rounded-lg shadow-md">
        </div> 
        
        <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $actualite->titre }}</h2>
    
        <p class="text-gray-700 leading-relaxed mb-4 text-justify">{{ $actualite->description }}</p>
    
        <div class="flex flex-col w-full text-center mt-8">
        <a href="{{route ('actu-edit', $actualite->id )}}" class="font-bold bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">Modifier</a> 
        <a href="{{route ('delete-actu', $actualite->id )}}" class="font-bold bg-red-600 text-white rounded-xl py-1.5 px-4 mt-4 ">Supprimer</a> 
        </div>
    </div>
    
    
</body>
</html>