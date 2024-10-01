@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos actualités</title>

   
</head>
<body>

    @section('content')

    <div class="relative h-80 w-full">
        <img class="h-80 w-full object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="Photo accueil">
    </div>

    <div class="w-full p-12 space-y-12">

      
        <a href="{{route('actualites')}}" class="items-center p-3 bg-jaune rounded-xl space-x-2">
            <i class="fa-solid fa-newspaper text-xl"></i> 
            <span class="font-bold">Voir toutes les actualités</span>
        </a>
    
            <h1 class="text-jaune font-black uppercase text-3xl text-center">
                {{$actualiteView->titre}}                  

            </h1>

        <div class="container mx-auto px-4 md:px-8 lg:px-12 space-y-12">

            <div class="border-t-2 border-black my-10 "></div>
        
            <div class="mx-4 md:mx-8 lg:mx-12">
                
                <div class="italic font-medium text-gray-600">
                    Publié le {{ $actualiteView->created_at->format('d/m/Y à H:i') }}  
                </div>
        
                <div class="text-justify mt-10">
                    {{$actualiteView->description}}                  
                </div>
            </div>
        </div>
            
    @endsection
    
</body>
</html>