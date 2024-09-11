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
    <title>Logos des partenaires</title>
</head>
<body>

    <a href="{{route ('partenaires-admin')}}" class="hover:underline absolute top-4 left-4"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer la page Nos partenaires
    </a>
    
    <div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Logos des partenaires </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-logo')}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label for="logo" class="block text-sm font-semibold  mb-2">Logo :</label>
            <input type="file" name="photo" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*" required>
        </div>
    
    
        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer un logo partenaire</button>
        </div>
    </form>
</div>
</div>



<div class="w-full p-12 grid grid-cols-3 gap-y-12"> 
    @foreach ($logos as $logo)
        
    <div class="flex flex-col items-center">
            <div class="mb-4">
                <img src="{{ Storage::url($logo->photo) }}" alt="" class=" w-64 h-64 object-cover rounded-lg shadow-md">
            </div> 
    
            <div class="mt-4">
                <a href="{{route ('delete-logo', $logo->id)}}" class="font-bold bg-red-600 text-white text-center rounded-xl py-1.5 px-4 ">Supprimer</a>
            </div>
        </div>

   @endforeach
</div>
   

</body>
</html>