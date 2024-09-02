@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Formule 1')

    @section('content')


    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> FORMULE 1 </div>
    </div>
<div class="flex space-x-2 font-bold text-lg relative top-8 ml-6">
            <div> Nous rejoindre </div> 
            <div> / </div> 
            <a href="{{route ('devenir-adherente')}}"> Devenir adhérente </a>
            <div> / </div> 
            <a href="#"> Formule 1 </a>
        </div>

    <div class="p-12">

        
        <div class="space-y-12 mt-6">

        <div class="flex items-center justify-center space-x-16">
            <img class="rounded-xl h-48 w-48 object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
            <div class="text-justify max-w-3xl"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tortor augue, facilisis vestibulum elementum vitae, tincidunt vel felis. Etiam lacinia nunc lacus, non egestas ante aliquam nec. Curabitur ut condimentum magna. Aliquam elementum, ipsum ut ornare tincidunt, quam lectus condimentum sapien, sed pellentesque nulla orci vel leo. Nunc cursus porttitor enim at dapibus. Maecenas diam sapien, interdum vitae elit at, congue volutpat turpis. Aliquam vitae eleifend eros, vitae placerat erat. Aenean augue sapien, sollicitudin non metus sit amet, bibendum finibus erat. Ut et purus lectus.</div>
        </div>

        <div class=" flex items-center justify-center space-x-16">
            <div class="text-justify max-w-3xl"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tortor augue, facilisis vestibulum elementum vitae, tincidunt vel felis. Etiam lacinia nunc lacus, non egestas ante aliquam nec. Curabitur ut condimentum magna. Aliquam elementum, ipsum ut ornare tincidunt, quam lectus condimentum sapien, sed pellentesque nulla orci vel leo. Nunc cursus porttitor enim at dapibus. Maecenas diam sapien, interdum vitae elit at, congue volutpat turpis. Aliquam vitae eleifend eros, vitae placerat erat. Aenean augue sapien, sollicitudin non metus sit amet, bibendum finibus erat. Ut et purus lectus.</div>
            <img class="rounded-xl h-48 w-48 object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
        </div>
        
        <div class="text-justify max-w-5xl relative mx-auto"> 
            Donec facilisis nec diam sed mollis. Quisque massa nisl, aliquet eu felis ac, placerat molestie nisi. Nulla aliquam vulputate tellus, in ultricies nibh. Nam in dui vulputate, finibus est at, faucibus lacus. Cras bibendum dui neque, sit amet mollis ipsum dictum sed. Etiam faucibus iaculis tellus ac sollicitudin. Donec vitae vestibulum neque. Vestibulum vel condimentum est. Pellentesque vel felis ut ex iaculis vulputate. Praesent imperdiet eget sapien non varius. Proin et maximus lacus. Aliquam blandit nisl sed mauris blandit, at elementum augue iaculis. Morbi commodo efficitur auctor.
            Etiam arcu velit, blandit sed feugiat eget, fermentum eu tellus. Donec commodo dictum lacus eu ultrices. Vestibulum viverra, lacus non luctus malesuada, augue arcu pulvinar eros, nec viverra est tortor ac sem. Pellentesque ornare est gravida tincidunt consequat. Curabitur mollis, quam in dictum pulvinar, elit neque dignissim augue, a scelerisque mi nisi sed libero. Nullam lectus felis, sollicitudin et commodo at, tempus sed nibh. Nam laoreet sodales ipsum pharetra egestas. Etiam et vehicula mi.
        </div>

      

        <div id="animation-carousel" class="relative mx-auto max-w-3xl" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 w-full overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img src="{{ asset('storage/images/photoaccueil.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img src="{{ asset('storage/images/photoaccueil.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item="active">
                    <img src="{{ asset('storage/images/photoaccueil.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img src="{{ asset('storage/images/photoaccueil.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img src="{{ asset('storage/images/photoaccueil.jpg') }}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-1/2 left-4 z-30 flex items-center justify-center h-10 w-10 transform -translate-y-1/2 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-1/2 right-4 z-30 flex items-center justify-center h-10 w-10 transform -translate-y-1/2 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
        

    
    </div>

       


    </div>

   
    @endsection
    
</body>
</html>