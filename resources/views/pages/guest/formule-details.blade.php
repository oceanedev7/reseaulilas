@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('content')


    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <h1 class="font-black text-4xl uppercase"> {{$formuleView->titre}} </h1>
    </div>
<div class="flex space-x-2 font-bold text-lg relative top-8 ml-6">
            <div> Nous rejoindre </div> 
            <div> / </div> 
            <a href="{{route ('devenir-adherente')}}"> Devenir adhérente </a>
            <div> / </div> 
            <a href="#">{{$formuleView->titre}} </a>
        </div>

    <div class="p-12">

        
        <div class="space-y-12 mt-6">

            <div class="flex flex-col md:flex-row items-center justify-center space-y-6 md:space-y-0 md:space-x-16">
                <img class="rounded-xl h-48 w-48 object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                <div class="text-justify max-w-3xl text-center md:text-left"> 
                    {{$formuleView->description1}}
                </div>
            </div>
        
            <div class="flex flex-col items-center justify-center">
                <div class="text-justify max-w-5xl text-center md:text-left">
                    {{$formuleView->description2}}
                </div>
            </div>
            
            <div class="text-justify max-w-5xl text-center md:text-left relative mx-auto"> 
                {{$formuleView->description3}}        
            </div>
        
            <div id="animation-carousel" class="relative mx-auto max-w-3xl" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative h-56 w-full overflow-hidden rounded-lg md:h-96">
                    @php
                        $photos = json_decode($formuleView->photo, true); 
                    @endphp
            
                    @if($photos)
                        <div class="relative h-full w-full overflow-hidden">
                            <!-- Carousel items -->
                            @foreach($photos as $index => $photo)
                                <div class="absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0" data-carousel-item>
                                    <img src="{{ Storage::url($photo) }}" alt="Image de la formule {{ $index + 1 }}" class="block w-full h-full object-cover">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center">Aucune photo sélectionnée</p>
                    @endif
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
        

    @endsection
    
</body>
</html>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carouselItems = document.querySelectorAll('[data-carousel-item]');
        const totalItems = carouselItems.length;
        let currentIndex = 0;

        const nextButton = document.querySelector('[data-carousel-next]');
        const prevButton = document.querySelector('[data-carousel-prev]');

        function updateCarousel() {
            carouselItems.forEach((item, index) => {
                item.style.opacity = '0'; 
                item.style.zIndex = '0'; 
            });

            carouselItems[currentIndex].style.opacity = '1';   
            carouselItems[currentIndex].style.zIndex = '1';   
        }

        nextButton.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % totalItems;
            updateCarousel();
        });

        prevButton.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            updateCarousel();
        });

        updateCarousel(); 
    });
</script>