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
    <title>@yield('title')</title>
</head>
<body>

    <nav class=" h-24 w-full flex items-center">
        <div class="flex items-center w-full max-w-screen-xl mx-auto px-16">
            <div class="flex-shrink-0">
                <img src="{{ asset('storage/images/logoreseaulilas.png') }}" alt="Logo Réseau LILAS" class="h-52">
            </div>
            
            <div class="flex-grow flex items-center justify-end space-x-20">

                <a href="{{route ('accueil')}}" class="text-lg font-medium">Accueil</a>

                <div class="relative group">
                    <a href="#" class="text-lg font-medium flex items-center">
                        Nous rejoindre
                        <svg class="w-2 h-2 ms-2 mt-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </a>
                    <div class="z-10 absolute left-1/2 -translate-x-1/2 mt-2 w-60 bg-white border border-black rounded-lg shadow-lg opacity-0 text-center group-hover:opacity-100 transition-opacity duration-300">
                        <a href="{{route ('devenir-adherente')}}" class="block px-4 py-2 font-semibold hover:text-jaune custom-border">Devenir adhérente</a>
                        <a href="{{route ('devenir-partenaire')}}" class="block px-4 py-2 font-semibold hover:text-jaune custom-border">Devenir partenaire</a>
                        <a href="{{route ('devenir-benevole')}}" class="block px-4 py-2 font-semibold hover:text-jaune">Devenir bénévole</a>
                    </div>     
                </div> 
                
                
                <div class="relative group">
                    <a href="#" class="text-lg font-medium flex items-center">
                        Nos actualités
                        <svg class="w-2 h-2 ms-2 mt-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </a>
                    <div class="z-10 absolute left-1/2 -translate-x-1/2 mt-2 w-48 bg-white border border-black rounded-lg shadow-lg opacity-0 text-center group-hover:opacity-100 transition-opacity duration-300">
                        <a href="{{route ('agenda')}}" class="block px-4 py-2 font-semibold hover:text-jaune custom-border">Agenda</a>
                        <a href="{{route ('actualites')}}" class="block px-4 py-2 font-semibold hover:text-jaune">Actualités</a>
                    </div>     
                </div>

                <a href="{{route ('nospartenaires')}}" class="text-lg font-medium">Nos partenaires</a>
                <a href="{{route ('contact')}}" class="text-lg font-medium">Contact</a>
            </div>
        </div>
    </nav>
    

    <main class="flex-grow">
        @yield('content')
    </main>

    
 <footer class="bg-jaune p-6">
        <div class="flex flex-row justify-center items-start ">
            
          <div class="flex flex-row mb-8">
                  <div class="flex-1 relative left-0 ">
                    <img src="{{ asset('storage/images/logofooter.png') }}" alt="Logo Réseau LILAS" class="">
                </div>  

                    <!-- Section 2: S'engager -->
                    <div class="flex-1 ">
                        <div class="text-base font-bold">S'engager</div>
                        <div class="flex flex-col space-y-2 text-base">
                            <a href="#" class="text-sm">- Devenir adhérente</a>
                            <a href="#" class="text-sm">- Devenir partenaire</a>
                            <a href="#" class="text-sm">- Devenir bénévole</a>
                        </div>
                    </div>

                    <!-- Section 3: Horaires -->
                    <div class="flex-1 ">
                        <div class="text-base font-bold">Horaires</div>
                        <div class="flex flex-col space-y-1 text-base">
                            <div class="flex items-center space-x-2">
                                <i class="fa-solid fa-calendar-days text-xl"></i>
                                <div class="text-sm">
                                    Du Lundi au Vendredi <br> De 8h30 à 17h
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section 4: Contactez-nous -->
                    <div class="flex-1 ">
                        <div class="text-base font-bold">Contactez-nous</div>
                        <div class="flex flex-col space-y-2 text-base">
                            <div class="flex items-center space-x-2">
                                <i class="fa-solid fa-location-dot text-xl"></i>
                                <div class="text-sm">
                                    Centre d'Affaires BE BOOSTER, <br> 12 Rue des Arts et Métiers, <br> Fort-de-France 97200, Martinique
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <i class="fa-solid fa-phone text-xl"></i>
                                <div class="text-sm">0696 40 21 90</div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <a href="#" class="text-xl"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="#" class="text-xl"><i class="fa-brands fa-square-instagram"></i></a>
                                <a href="#" class="text-xl"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#" class="text-xl"><i class="fa-brands fa-square-whatsapp"></i></a>
                                <div class="text-center text-sm">
                                    Rejoignez notre groupe “Entrepreneuses 972”
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        
        
        <div class="text-center border-t border-black">
            <div class="inline-flex items-center space-x-2 relative top-2">
                <a href="#" class="text-sm">Mentions légales</a>
                <span class="border-l border-black h-4"></span>
                <a href="#" class="text-sm">Politique de confidentialité</a>
                <span class="border-l border-black h-4"></span>
                <a href="#" class="text-sm">Plan du site</a>
            </div>
        </div>
    </footer>
    
    
         

        




<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>
</html>