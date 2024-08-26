@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Évènement')

    @section('content')

    
    <div class="relative h-80 w-full">
        <img class="h-80 w-full object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="Photo accueil">
    </div>

    <div class="w-full p-12 ">

        <a href="#" class="items-center p-3 bg-jaune rounded-xl space-x-2">
            <i class="fa-solid fa-calendar-alt text-xl"></i> 
            <span class="font-bold">Voir l'agenda</span>
        </a>
        

        <div class="container mx-auto space-y-12">

        <div class="font-black uppercase text-3xl text-center"> - TITRE -  </div>

        <div class="flex font-bold flex-row justify-center text-xl space-x-24"> 
            <div>Fort-de-France </div>
            <div> 19/09/2024</div>
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