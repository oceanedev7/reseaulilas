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
<body>
    
    <a href="{{route ('dashboard')}}" class="absolute top-8 left-10 text-3xl"> <i class="fa-solid fa-house"></i> </a>
<div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Les actualités </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-actu')}}" enctype="multipart/form-data">
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
            <input type="file" name="photo" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border file:border-gray-300 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" accept="image/*" required>
        </div>


        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer une actualité </button>
        </div>
    </form>
</div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 p-6 justify-items-center mt-6">
    @foreach ($actualites as $actualite)
    <div class="flex flex-col"> 
    <div class="bg-white max-w-xs w-full rounded-xl custom-shadow overflow-hidden p-3">
        <div class="relative rounded-lg overflow-hidden">
            <div class="p-4">
                <img class="w-full h-40 rounded-lg object-cover" src="{{ Storage::url($actualite->photo)}}" alt="">
            </div>
        </div>
        <div class="flex flex-col px-4 py-2 space-y-2">
            <div class="flex flex-row space-x-2 items-center">
                <div><i class="fa-solid fa-calendar-days"></i></div>
                <div class="font-bold text-sm">{{$actualite->created_at->format('d/m/Y') }}</div>
            </div>
            <div class="font-bold text-md title-clamp ml-2">{{$actualite->titre}}</div>
            <div class="text-center text-justify text-sm line-clamp-3">
                {{$actualite->description}}
            </div>
            <div class="flex space-x-2 items-center justify-center mt-2">
                <a href="{{ route('actu-detail', $actualite->id) }}" class="bg-jaune font-semibold text-center rounded px-2 py-1 text-sm">
                    Voir plus <i class="fa-solid fa-circle-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="flex justify-center space-x-4 mt-4 w-full">
        <a href="{{ route('actu-edit', $actualite->id) }}" class="font-bold bg-green-600 text-white rounded-xl px-2 py-1 ">
            Modifier
        </a>
        <a href="{{ route('delete-actu', $actualite->id) }}" class="font-bold bg-red-600 text-white rounded-xl px-2 py-1">
            Supprimer
        </a>
    </div>
</div>
    @endforeach
</div>



<div class="mt-6">
    {{ $actualites->links('vendor.pagination.tailwind-page') }}
</div>

</body>
</html>