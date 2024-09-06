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

    <title>Offres d'emploi</title>
</head>
<body class="bg-gray-200">

    
<a href="{{route ('emploi-detail', $emploi->id)}}" class="hover:underline relative top-8 left-8"> 
    <i class="fa-solid fa-arrow-left"></i>
    Revenir à la page des détails de l'offre d'emploi
</a>

<div class="flex flex-col items-center p-12 space-y-6"> 
    <div class="uppercase text-3xl font-black text-center"> Modifier l'offre d'emploi</div>

    <div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">
    <form method="POST" action="{{route ('emploi-update', $emploi->id)}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="titre" class="block text-sm font-semibold  mb-2">Titre :</label>
            <input value="{{ $emploi->titre }}" name="titre" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
        </div>
        
        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold  mb-2">Description :</label>
            <textarea name="description" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >{{ $emploi->description }}</textarea>
        </div>
        
        <div class="mb-4">
            <label for="photo" class="block text-sm font-semibold  mb-2">Photo :</label>
            <img src="{{ Storage::url($emploi->photo) }}" alt="Photo de l'emploi" class="w-full h-64 object-cover rounded-lg shadow-md">
            <input class="" aria-describedby="user_avatar_help" name="photo" type="file" accept="image/*"/>

        </div>
        
        <div class="mb-4">
            <label for="qualification" class="block text-sm font-semibold  mb-2">Compétences :</label>
            <textarea  name="qualification" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune">{{ $emploi->qualification }}</textarea>
        </div>
        
        <div class="mb-4">
            <label for="mission" class="block text-sm font-semibold  mb-2">Missions :</label>
            <textarea  name="mission" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >{{ $emploi->mission }}</textarea>
        </div>
        
        <div class="mb-4">
            <label for="lieu" class="block text-sm font-semibold  mb-2">Lieu :</label>
            <input value="{{ $emploi->lieu }}" name="lieu" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >
        </div>
        
        <div class="mb-4">
            <label for="salaire" class="block text-sm font-semibold  mb-2">Salaire :</label>
            <input value="{{ $emploi->salaire }}"  name="salaire" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >
        </div>
        
        <div class="mb-4">
            <label for="type_contrat" class="block text-sm font-semibold  mb-2">Type de contrat:</label>
            <input value="{{ $emploi->type_contrat }}" name="type_contrat" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold  mb-2">Email:</label>
            <input value="{{ $emploi->email }}" name="email" class="w-full px-3 py-2 border border-black rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >
        </div>
        
        <div class="mb-4">
            <label for="telephone" class="block text-sm font-semibold  mb-2">Téléphone:</label>
            <input  value="{{ $emploi->telephone }}" name="telephone" class="w-full px-3 py-2 border border-black rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >
        </div>

        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Modifier cette offre d'emploi</button>
        </div>
    </form>
    </div>
</div>
</body>
</html>