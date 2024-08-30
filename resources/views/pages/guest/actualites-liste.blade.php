@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Actualités')

    @section('content')
    
    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> ACTUALITÉS </div>
    </div>

    <div class="w-full p-10">

        <div class="flex space-x-2 font-bold text-lg">
        <div> Nos actions </div> 
        <div> / </div> 
        <a href="{{route ('actualites')}}"> Actualités </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 p-6 justify-items-center mt-6">
            <div class="bg-white max-w-xs w-full rounded-xl custom-shadow overflow-hidden">
                <div class="relative rounded-lg overflow-hidden">
                    <div class="p-4">
                        <img class="w-full h-40 rounded-lg object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="Image d'exemple">
                    </div>
                </div>
                <div class="flex flex-col px-4 py-2 space-y-2">
                    <div class="flex flex-row space-x-2 items-center">
                        <div><i class="fa-solid fa-calendar-days"></i></div>
                        <div class="font-bold text-sm">19/09/2024</div>
                    </div>
                    <div class="font-bold text-md title-clamp ml-2">TITRE</div>
                    <div class="text-center text-justify text-sm line-clamp-3">
                        Lorem ipsum dolor sit amet, ullamcorper ante et, efficitur leo. Aenean eget urna fringilla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis ultricies libero non ligula sollicitudin, ac faucibus mi fringilla.
                    </div>
                    <div class="flex justify-end pb-4">
                        <a href="#" class="bg-jaune font-semibold text-center mt-2 rounded px-3 py-1">
                            Voir plus <i class="fa-solid fa-circle-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            
  
        </div>
        
            
            
            
        
    </div>
    @endsection
    
</body>
</html>