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

    <title>Notre équipe</title>
</head>
<body class="bg-gray-200">

    
<a href="{{route ('team-content')}}" class="hover:underline relative top-8 left-8"> 
    <i class="fa-solid fa-arrow-left"></i>
    Revenir à la page d'édition des membres de l'équipe
</a>

<div class="flex flex-col items-center p-12 space-y-6"> 
    <div class="uppercase text-3xl font-black text-center"> Notre équipe</div>

    <div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">
    <form method="POST" action="{{route ('team-update', $team->id)}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="photo" class="block text-sm font-semibold  mb-2">Photo :</label>
            <img src="{{ Storage::url($team->photo) }}" alt="" class="w-full h-64 object-cover rounded-lg shadow-md">
            <input class="" aria-describedby="user_avatar_help" name="photo" type="file" accept="image/*"/>

        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold  mb-2">Prénom :</label>
            <input value="{{ $team->prenom }}" name="prenom" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
        </div>


        <div class="mb-4">
            <label class="block text-sm font-semibold  mb-2">Nom :</label>
            <input value="{{ $team->nom }}" name="nom" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold  mb-2">Fonction :</label>
            <input value="{{ $team->fonction }}" name="fonction" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
        </div>
  
       
        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Modifier les informations </button>
        </div>
    </form>
    </div>
</div>
</body>
</html>