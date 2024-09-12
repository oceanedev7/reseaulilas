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
    <title>Les formules</title>
</head>
<body>

    <a href="{{route ('accueil-admin')}}" class="hover:underline absolute top-4 left-4"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer la page Accueil
    </a>
    
    <div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Les formules </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-formule')}}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Titre :</label>
            <input name="titre" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

         @error('titre')
        <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
     @enderror

        <div class="mb-4">
            <label for="photo" class="block text-sm font-semibold  mb-2">Photos du caroussel :</label>
            <input type="file" name="photo[]" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*" multiple  required>
        </div>

      

        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Presentation :</label>
            <input name="presentation" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

        @error('presentation')
        <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
    @enderror

        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Description 1 :</label>
            <textarea name="description1" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required></textarea>
        </div>

        @error('description')
        <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
    @enderror

        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Description 2 :</label>
            <textarea name="description2" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required></textarea>
        </div>

        @error('description')
        <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
    @enderror

        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Description 3 :</label>
            <textarea name="description3" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" required></textarea>
        </div>

        @error('description3')
        <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
    @enderror


        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer une formule</button>
        </div>
    </form>
</div>
</div>



<div class="w-full grid grid-cols-3 gap-8 items-center justify-center p-12"> 
    @foreach ($formules as $formule)
        <div class="flex flex-col bg-white border border-2 border-jaune rounded-xl p-4 relative w-[250px] h-[200px]">
            <div class="uppercase text-lg text-center font-bold text-black mb-2">
                {{ $formule->titre }}
            </div>
            <div class="text-justify whitespace-normal text-xs text-black mb-2">
                {{ $formule->presentation }}
            </div>
            <a href="" class="bg-jaune text-black text-center rounded mx-auto py-1 px-2 text-xs">
                Voir plus <i class="fa-solid fa-circle-arrow-right ml-1"></i>
            </a>
            
            @if(isset($photoPaths) && is_array($photoPaths))
                @foreach ($photoPaths as $path)
                    <div class="p-2">
                        <img src="{{ Storage::url($path) }}" alt="Photo" class="w-32 h-32 object-cover">
                    </div>
                @endforeach
            @else
                <p>Aucune photo disponible.</p>
            @endif
        </div>
    @endforeach
</div>


</body>
</html>