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
    <title>Offres d'emploi</title>
</head>
<body>

<a href="{{route ('dashboard')}}" class="absolute top-8 left-10 text-3xl"> <i class="fa-solid fa-house"></i> </a>
<div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Les offres d'emploi </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-emploi')}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="titre" class="block text-sm font-semibold  mb-2">Titre :</label>
            <input name="titre" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>
        
        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold  mb-2">Description :</label>
            <textarea name="description" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required></textarea>
        </div>
        
        <div class="mb-4">
            <label for="photo" class="block text-sm font-semibold  mb-2">Photo :</label>
            <input type="file"name="photo" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*" required>
        </div>
        
        <div class="mb-4">
            <label for="qualification" class="block text-sm font-semibold  mb-2">Compétences :</label>
            <textarea  name="qualification" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required></textarea>
        </div>
        
        <div class="mb-4">
            <label for="mission" class="block text-sm font-semibold  mb-2">Missions :</label>
            <textarea  name="mission" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required></textarea>
        </div>
        
        <div class="mb-4">
            <label for="lieu" class="block text-sm font-semibold  mb-2">Lieu :</label>
            <input name="lieu" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required>
        </div>
        
        <div class="mb-4">
            <label for="salaire" class="block text-sm font-semibold  mb-2">Salaire :</label>
            <input  name="salaire" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >
        </div>
        
        <div class="mb-4">
            <label for="type_contrat" class="block text-sm font-semibold  mb-2">Type de contrat:</label>
            <input  name="type_contrat" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required>
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold  mb-2">Email:</label>
            <input  name="email" class="w-full px-3 py-2 border border-black rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required>
        </div>
        
        <div class="mb-4">
            <label for="telephone" class="block text-sm font-semibold  mb-2">Téléphone:</label>
            <input   name="telephone" class="w-full px-3 py-2 border border-black rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required>
        </div>

        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer une offre d'emploi</button>
        </div>
    </form>
</div>
</div>



<div class="grid grid-cols-2 gap-12 p-12">
    @foreach ($emplois as $emploi)
        
   
    <div class="  custom-shadow rounded-xl p-4 box-border overflow-hidden whitespace-normal p-8">
    <div class="space-y-2.5">
        <div class="flex space-x-8">
        <div class="uppercase truncate text-xl font-black">{{$emploi->titre}}</div>
        <div class="uppercase truncate font-semibold mt-0.5">{{$emploi->type_contrat}}</div>
        </div>
        
        <div class="truncate italic">{{$emploi->lieu}}</div>
        <div class="bg-[#f9e596] rounded-xl py-1.5 px-2 max-w-32 text-center whitespace-normal font-bold">{{$emploi->salaire}}€</div>
        
        <div class="overflow-hidden text-ellipsis line-clamp-4 whitespace-normal">
            {{$emploi->description}}
        </div>
        
    </div>

    <div class="flex justify-start mt-4">
        <a href="{{route ('emploi-edit', $emploi->id )}}" class="font-bold bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">Modifier</a>
        <a href="{{route ('delete-emploi', $emploi->id )}}" class="font-bold bg-red-600 text-white rounded-xl py-1.5 px-4 mt-4 ml-2"> Supprimer</a>
         <a href="{{route ('emploi-detail', $emploi->id)}}" class="font-bold bg-jaune rounded-xl py-1.5 px-4 mt-4 ml-36">Voir le détail</a>
    </div>
 
    </div>
    @endforeach 

</div>
</body>
</html>