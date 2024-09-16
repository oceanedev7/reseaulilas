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

    <title>Nos formules</title>
</head>
<body class="bg-gray-200">

    
<a href="{{route ('formule-details', $formule->id)}}" class="hover:underline relative top-8 left-8"> 
    <i class="fa-solid fa-arrow-left"></i>
    Revenir à la page de la formule
</a>

<div class="flex flex-col items-center p-12 space-y-6"> 
    <div class="uppercase text-3xl font-black text-center"> Modifier la formule</div>

    <div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">
        <form method="POST" action="{{ route('formule-update', $formule->id) }}" enctype="multipart/form-data">
            @csrf
        
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">Titre :</label>
                <input value="{{ $formule->titre }}" name="titre" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
            </div>

            @error('titre')
            <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
         @enderror

            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">Présentation :</label>
                <input value="{{ $formule->presentation }}" name="presentation" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
            </div>

            @error('presentation')
            <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>
        @enderror
        
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">Description 1 :</label>
                <textarea name="description1" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >{{ $formule->description1 }}</textarea>
            </div>

            @error('description1')
        <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
    @enderror
        
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">Description 2 :</label>
                <textarea name="description2" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune">{{ $formule->description2 }}</textarea>
            </div>

            @error('description2')
        <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
    @enderror
        
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">Description 3 :</label>
                <textarea name="description3" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-jaune focus:border-jaune" >{{ $formule->description3 }}</textarea>
            </div>

            @error('description3')
        <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
    @enderror
        
            <div class="mb-4">
                <label class="block text-sm font-semibold mb-2">Photos :</label>
                <input type="file" name="photo[]" multiple class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
                
                @if($formule->photo)
                    @php
                        $photos = json_decode($formule->photo, true);
                    @endphp
                    <div class="mt-2">
                        <p class="font-semibold">Photos existantes :</p>
                        <div class="flex flex-wrap gap-2 mt-2">
                            @foreach($photos as $photo)
                                <div class="relative inline-block">
                                    <img src="{{ Storage::url($photo) }}" alt="Photo de la formule" class="w-32 h-32 object-cover rounded-md">
                                    <button type="button" data-photo="{{ $photo }}" class="absolute top-0 right-0 p-1 bg-red-500 text-white rounded-full text-xs">X</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        
            <div class="mb-4">
                <button type="submit" class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Modifier cette formule</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

