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
<body>

    <a href="{{route ('decouvrir-admin')}}" class="hover:underline absolute top-4 left-4"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer la page Nous découvrir
    </a>
    
    <div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Notre équipe </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-team')}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Photo de la membre de l'équipe :</label>
            <input type="file" name="photo" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*" required>
        </div>

        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Prénom :</label>
            <input name="prenom" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

        
        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Nom :</label>
            <input name="nom" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

        
        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Fonction :</label>
            <input name="fonction" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

     
        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer une nouvelle membre de l'équipe</button>
        </div>
    </form>
</div>
</div>



<div class="w-full grid grid-cols-3 items-center justify-center p-12 gap-8"> 

        @foreach ($teams as $team)

              <div class="flex flex-col">  

                <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-52 w-60 rounded-xl relative z-20">
                    <img class="h-36 w-60 rounded-xl object-cover w-full" src="{{ Storage::url($team->photo) }}" alt="">
                    <div class="flex flex-col items-center mt-1.5">
                      <div>{{$team->prenom}} {{$team->nom}}</div>
                      <div class="font-bold">{{$team->fonction}}</div>
                    </div>
                  </div>
                

            <a href="{{route('team-edit', $team->id)}}" class="font-bold text-center bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">Modifier</a>
              
        </div>

        @endforeach
    
</div>
   

</body>
</html>