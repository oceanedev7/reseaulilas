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
    <title>Les adresses des locaux</title>
</head>
<body>

    <a href="{{route ('contact-admin')}}" class="hover:underline absolute top-4 left-4"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer la page Contact
    </a>
    
    <div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Les adresses des locaux </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-adress')}}">
        @csrf

            <label for="Adresse postale" class="block text-sm font-semibold  mb-2">Adresse postale :</label>
            <input name="adresse_postale" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
    
    
        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer une adresse</button>
        </div>
    </form>
</div>
</div>



<div class="w-full h-72 grid grid-cols-1 md:grid-cols-3 gap-y-20 p-12"> 
    @foreach ($adresses as $adresse)
        
        <div class="flex flex-col items-center">
            <div class="flex items-center justify-center rounded-xl h-32 w-72 custom-shadow overflow-hidden"> 
                <div class="flex items-center justify-center">
                    <div class="text-center break-words whitespace-normal">
                        {{$adresse->adresse_postale}}
                    </div>
                </div>
            </div>
    
            <div class="flex justify-start mt-4">
                <a href="{{route ('adress-edit', $adresse->id)}}" class="font-bold bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">Modifier</a>
                <a href="{{route ('delete-adress', $adresse->id)}}" class="font-bold bg-red-600 text-white rounded-xl py-1.5 px-4 mt-4 ml-2">Supprimer</a>
            </div>
        </div>
    
   @endforeach
</div>
   

</body>
</html>