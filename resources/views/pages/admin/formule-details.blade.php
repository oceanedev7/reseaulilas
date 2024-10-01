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

    <title>Les formules</title>
</head>
<body class="bg-gray-200">

<a href="{{route ('formules')}}" class="hover:underline relative top-8 left-8"> 
    <i class="fa-solid fa-arrow-left"></i>
     Revenir à la page d'édition des formules
</a>
    <div class="p-6 bg-white shadow-lg rounded-lg max-w-xl mx-auto custom-shadow mt-16">
        
        
        <p class="mb-8"> <img class="w-full rounded-lg object-cover" src="{{ Storage::url($formule->photo_pres)}}" alt=""> </p>

        <label class="block font-bold">Titre : </label>
        <p class=" font-bold text-gray-800 mb-4">{{ $formule->titre }}</p>

        <label class="block font-bold">Présentation : </label>
        <p class=" text-gray-800 mb-4">{{ $formule->presentation }}</p>

        <label class="block font-bold">Description 1 : </label>
        <p class="text-gray-700 leading-relaxed mb-4 text-justify">{{ $formule->description1}}</p>

        <label class="block font-bold">Description 2 : </label>
        <p class="text-gray-700 leading-relaxed mb-4 text-justify">{{ $formule->description2}}</p>

        <label class="block font-bold">Description 3 : </label>
        <p class="text-gray-700 leading-relaxed mb-4 text-justify">{{ $formule->description3}}</p>
    
    
        <div id="animation-carousel" class="relative mx-auto max-w-3xl" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 w-full overflow-hidden rounded-lg md:h-96">
                @php
                    $photos = json_decode($formule->photo, true); 
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
                    <p>Aucune photo sélectionnée</p>
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

        <div class="flex flex-col w-full text-center mt-8">
        <a href="{{route('formule-edit', $formule->id)}}" class="font-bold bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">Modifier</a> 
        </div> 
        
    </div>
    
   
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