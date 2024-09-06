@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Nos partenaires')

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> REMERCIEMENTS </div>
    </div>

    <div class="w-full p-12">

          <div class="relative flex items-center">

            <div class="bg-white rounded-xl custom-shadow overflow-hidden p-8 max-w-3xl z-10 absolute transform translate-x-1/2">
                <div class="uppercase font-black text-center mb-4 text-xl">LOREM IPSUM</div>
                <div class="text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar, arcu venenatis sodales venenatis, magna elit eleifend nulla, non blandit orci arcu non dui.
                    Vestibulum dui tortor, fermentum ut ligula id, rutrum ornare purus. Aliquam consectetur fermentum vulputate. Nunc quis molestie ipsum. Fusce turpis tellus, viverra sed pretium ac, interdum vel diam. Vivamus rhoncus eros a ante varius malesuada. Ut at mattis eros. Ut commodo a eros eu vestibulum.
                    Integer eleifend mauris vitae enim iaculis porta. Suspendisse sit amet tortor massa.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar, arcu venenatis sodales venenatis, magna elit eleifend nulla, non blandit orci arcu non dui.
                    Vestibulum dui tortor, fermentum ut ligula id, rutrum ornare purus. Aliquam consectetur fermentum vulputate. Nunc quis molestie ipsum. Fusce turpis tellus, viverra sed pretium ac, interdum vel diam. Vivamus rhoncus eros a ante varius malesuada. Ut at mattis eros. Ut commodo a eros eu vestibulum.
                    Integer eleifend mauris vitae enim iaculis porta. Suspendisse sit amet tortor massa.
                </div>
            </div>

            <div class="h-[550px] w-[480px] flex justify-center">
                <img class="h-full w-full  rounded-xl object-cover" src="{{ asset('storage/images/nospartenaires.jpg') }}" alt="">
            </div>
        
        </div>
        

        <div class="container mx-auto p-4"> 
            <div class="grid grid-cols-2 md:grid-cols-4 gap-x-12 gap-y-12 mt-12 ">
                <!-- Logo 1 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                <!-- Logo 2 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                <!-- Logo 3 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                <!-- Logo 4 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>

                <!-- Logo 1 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                <!-- Logo 2 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                <!-- Logo 3 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                <!-- Logo 4 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>

                 <!-- Logo 1 -->
                 <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                <!-- Logo 2 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                <!-- Logo 3 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                <!-- Logo 4 -->
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="" class="">
                </div>
        
                
            </div>
        </div>
        
   
        
    
        
        
        
        
        

    </div>

    @endsection
    
</body>
</html>