@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Agenda')

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> AGENDA </div>
    </div>

    <div class="w-full p-12">

        <div class="font-black text-xl">FILTRER LES RÉSULTATS</div>

        <form class="flex flex-row space-x-12 mt-8"> 
            <input placeholder="Date" class="bg-gray-300 border-none rounded-lg pl-4 placeholder-gray-700" type="date">
            <select class="bg-gray-300 border-none rounded-lg">
                <option value="" disabled selected>Sélectionnez une catégorie</option>
                <option value="">Les rencontres du réseau</option>
                <option value="">Les médias</option>
                <option value="">Autres projets</option>
            </select>
        
            <button class="bg-jaune font-bold text-center rounded px-3 py-1 text-sm">FILTRER</button>
        </form>
        
       
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16 mt-16"> 
            <a class="bg-white max-w-xs w-full rounded-xl custom-shadow overflow-hidden relative"> 
                <div class="relative rounded-lg overflow-hidden">
                    <img class="w-full h-40 object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                    <div class="absolute top-0 left-0 right-0 h-14 z-10 flex items-center justify-center">
                        <div class="absolute inset-0 bg-jaune opacity-70 z-0"></div>
                        <div class="font-bold text-xl z-10 relative">19/08/2024</div>
                    </div>
                    
                </div>
              
                <div class="absolute left-6 transform -translate-y-1/2 bg-jaune max-w-full rounded-lg p-1 px-3 z-20 whitespace-nowrap overflow-x-auto" style="top: 160px;">
                    <span class="font-bold">Catégorie</span>
                </div>  
                
                <div class="uppercase p-10 font-black text-center overflow-hidden whitespace-normal">
                    Titre
                </div>
            </a>
        </div>
        
    </div>

    @endsection
    
</body>
</html>