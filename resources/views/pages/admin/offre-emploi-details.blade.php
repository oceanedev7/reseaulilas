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
<body class="bg-gray-200">

<a href="{{route ('emploi')}}" class="hover:underline relative top-8 left-8"> 
    <i class="fa-solid fa-arrow-left"></i>
     Revenir à la page des offres d'emploi
</a>
    <div class="p-6 bg-white shadow-lg rounded-lg max-w-xl mx-auto custom-shadow">
        <div class="mb-4">
            <img src="{{ Storage::url($emploi->photo) }}" alt="Photo de l'emploi" class="w-full h-64 object-cover rounded-lg shadow-md">
        </div> 
        
        <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $emploi->titre }}</h2>
    
        <p class="text-gray-700 leading-relaxed mb-4 text-justify">{{ $emploi->description }}</p>
    
        <div class="mb-4">
            <h3 class="font-semibold text-lg text-gray-800 text-justify">Qualifications :</h3>
            <p class="text-gray-700">{{ $emploi->qualification }}</p>
        </div>
    
        <div class="mb-4">
            <h3 class="font-semibold text-lg text-gray-800 text-justify">Missions :</h3>
            <p class="text-gray-700">{{ $emploi->mission }}</p>
        </div>
    
            <div class="mb-4">
                <h3 class="font-semibold text-lg text-gray-800">Type de contrat :</h3>
                <p class="text-gray-700">{{ $emploi->type_contrat }}</p>
            </div>

            <div class="mb-4">
                <h3 class="font-semibold text-lg text-gray-800">Lieu :</h3>
                <p class="text-gray-700">{{ $emploi->lieu }}</p>
            </div>
        
    
        @if($emploi->salaire)
        <div class="mb-4">
            <h3 class="font-semibold text-lg text-gray-800">Salaire :</h3>
            <p class="font-bold">{{ $emploi->salaire }} €</p>
        </div>
        @endif
    
        <div class="border-t border-gray-200 pt-4">
            <h3 class="font-semibold text-lg text-gray-800 mb-2">Contact :</h3>
            <p class="text-gray-700">
                <span class="font-bold">Email :</span> {{ $emploi->email }}
            </p>
            <p class="text-gray-700">
                <span class="font-bold">Téléphone :</span> {{ $emploi->telephone }}
            </p>
        </div>

        <div class="flex flex-col w-full text-center mt-8">
        <a href="{{route ('emploi-edit', $emploi->id )}}" class="font-bold bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">Modifier</a>
        <a href="{{route ('delete-emploi', $emploi->id )}}" class="font-bold bg-red-600 text-white rounded-xl py-1.5 px-4 mt-4 ">Supprimer</a>
        </div>
    </div>
    
    
</body>
</html>