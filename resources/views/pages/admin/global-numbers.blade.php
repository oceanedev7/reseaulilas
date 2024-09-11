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
    <title>Les chiffres sur l'entreprenariat</title>
</head>
<body>

    <a href="{{route ('accueil-admin')}}" class="hover:underline absolute top-4 left-4"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer la page Accueil
    </a>
    
    <div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Les chiffres sur l'entreprenariat </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-global-number')}}">
        @csrf

        <div class="mb-4">
        <label  class="block text-sm font-semibold  mb-2">Chiffre :</label>
        <input name="titre" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Description :</label>
            <input name="description" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

    
        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer une statistique</button>
        </div>
    </form>
</div>
</div>



<div class="w-full h-72 flex flex-col items-center justify-center p-12"> 
 
        
        <div class=" h-40 w-7/10 py-24 rounded-xl flex items-center justify-center space-x-8 bg-jaune">
            @foreach ($globals as $global)
                
            
            <div class="flex flex-col items-center text-center">
                <div class="font-black text-6xl" >{{$global->titre}}%</div>
                <div class="text-sm">{{$global->description}}</div>
                <a href="{{route('global-number-edit', $global->id)}}" class="font-bold bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">Modifier</a>
            </div>
       

    @endforeach
            
        </div>
    
</div>
   

</body>
</html>