<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    <title>Remerciements - Partenaires</title>
</head>
<body class="bg-gray-200">

    
<a href="{{route ('adresse')}}" class="hover:underline relative top-8 left-8"> 
    <i class="fa-solid fa-arrow-left"></i>
    Revenir à la page d'édition des remerciements
</a>

<div class="flex flex-col items-center p-12 space-y-6"> 
    <div class="uppercase text-3xl font-black text-center"> Modifier la description</div>

    <div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">
    <form method="POST" action="{{route ('partner-update', $description->id)}}" >
        @csrf

        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold  mb-2">Description :</label>
        <textarea class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" name="description">{{ $description->description }}</textarea>
        </div>
        
        @error('description')
            <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
        @enderror

        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Modifier cette description</button>
        </div>
    </form>
    </div>
</div>
</body>
</html>