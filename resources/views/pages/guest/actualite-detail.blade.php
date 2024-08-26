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

    <div class="relative h-80 w-full">
        <img class="h-80 w-full object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="Photo accueil">
    </div>

    <div class="w-full p-12 space-y-12">

      
        <a href="{{route('actualites')}}" class="items-center p-3 bg-jaune rounded-xl space-x-2">
            <i class="fa-solid fa-newspaper text-xl"></i> 
            <span class="font-bold">Voir toutes les actualités</span>
        </a>
    
            <div class="text-jaune font-black uppercase text-3xl text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </div>

        <div class="container mx-auto px-4 md:px-8 lg:px-12 space-y-12">

            <div class="border-t-2 border-black my-10 "></div>
        
            <div class="mx-4 md:mx-8 lg:mx-12">
                
                <div class="italic font-medium text-gray-600">
                    Publié le 19/09/2024 à 10h42
                </div>
        
                <div class="text-justify mt-10">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar, arcu venenatis sodales venenatis, magna elit eleifend nulla, non blandit orci arcu non dui.
                    Vestibulum dui tortor, fermentum ut ligula id, rutrum ornare purus. Aliquam consectetur fermentum vulputate. Nunc quis molestie ipsum. Fusce turpis tellus, viverra sed pretium ac, interdum vel diam. Vivamus rhoncus eros a ante varius malesuada. Ut at mattis eros. Ut commodo a eros eu vestibulum.
                    Integer eleifend mauris vitae enim iaculis porta. Suspendisse sit amet tortor massa.
                    Curabitur molestie sodales lorem, ac porttitor lectus vestibulum at. Nunc ac sollicitudin augue, bibendum molestie ligula. Nam eu auctor metus. Nullam magna odio, fermentum vel hendrerit sit amet, mattis nec metus. Sed sed condimentum nunc. Praesent nisl enim, rhoncus in efficitur ut, rhoncus maximus est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar, arcu venenatis sodales venenatis, magna elit eleifend nulla, non blandit orci arcu non dui.
                    Vestibulum dui tortor, fermentum ut ligula id, rutrum ornare purus. Aliquam consectetur fermentum vulputate. Nunc quis molestie ipsum. Fusce turpis tellus, viverra sed pretium ac, interdum vel diam. Vivamus rhoncus eros a ante varius malesuada. Ut at mattis eros. Ut commodo a eros eu vestibulum.
                    Integer eleifend mauris vitae enim iaculis porta. Suspendisse sit amet tortor massa.
                    Curabitur molestie sodales lorem, ac porttitor lectus vestibulum at. Nunc ac sollicitudin augue, bibendum molestie ligula. Nam eu auctor metus. Nullam magna odio, fermentum vel hendrerit sit amet, mattis nec metus. Sed sed condimentum nunc. Praesent nisl enim, rhoncus in efficitur ut, rhoncus maximus est.
                </div>
            </div>
        </div>
            
    @endsection
    
</body>
</html>