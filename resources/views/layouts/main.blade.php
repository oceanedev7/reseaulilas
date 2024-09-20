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
        
    <nav class="h-24 w-full flex items-center">
        <div class="flex items-center w-full max-w-screen-xl mx-auto">
            <a href="{{route ('accueil')}}" class="flex-shrink-0 ml-14">
                <img src="{{ asset('storage/images/logoreseaulilas.png') }}" alt="Logo Réseau LILAS" class="h-52">
            </a>
    

            <div class="flex-grow flex items-center justify-end">
                <div class="h-24 hover:bg-jaune flex items-center px-6">
                    <a href="{{route ('accueil')}}" class="text-lg font-medium">Accueil</a>
                </div>

                <div class="h-24 hover:bg-jaune flex items-center px-6">
                    <a href="{{route ('nous-decouvrir')}}" class="text-lg font-medium">Nous découvrir</a>
                </div>
    
                 <li class=" relative h-24 hover:bg-jaune flex justify-center items-center px-6 menu-item">
                    <a href="#" class="text-lg font-medium flex items-center">Nous rejoindre<svg class="w-2 h-2 ms-2 mt-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </a>
                    <ul class="z-10 absolute hidden text-center mt-52 w-52 p-2 space-y-2 bg-white border border-black rounded-lg  submenu">
                        <li class="relative submenu-item">
                         
                          <a href="{{route ('devenir-adherente')}}" class="custom-border text-center  flex justify-center px-4 hover:text-yellow-400 font-semibold">
                            <svg class="w-2 h-2 ms-2 mt-2.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                            Devenir adhérente
                        </a>
                    
                        @if (isset($formulesView))
                        <ul class="z-10 absolute top-0 right-48 hidden p-2 w-44 space-y-2 bg-white border-2 border-black rounded-lg sub-submenu overflow-auto">
                            @foreach ($formulesView as $formule)
                                <li class="border-submenu">
                                    <a href="{{ route('accueil-formule-details', $formule->id) }}" class="block px-4 hover:text-jaune font-medium uppercase">
                                        {{ $formule->titre }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        
                    @endif
                    
                        </li>
                       
                        <li><a href="{{route ('devenir-partenaire')}}" class="block px-4  hover:text-jaune custom-border font-semibold">Devenir partenaire</a></li>
                        <li><a href="{{route ('devenir-benevole')}}" class="block px-4  hover:text-jaune custom-border font-semibold">Devenir bénévole</a></li>
                        <li><a href="{{route ('recrutement')}}" class="block px-4  hover:text-jaune font-semibold">Recrutement</a></li>
                       
                    </ul>
                </li>

                
                <div class="relative group h-24 hover:bg-jaune flex items-center px-6">
                    <a href="#" class="text-lg font-medium flex items-center">
                        Nos actions
                        <svg class="w-2 h-2 ms-2 mt-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </a>
                    <div class="z-10 absolute left-1/2 -translate-x-1/2 mt-32 w-44 bg-white border border-black rounded-lg shadow-lg opacity-0 text-center group-hover:opacity-100 transition-opacity duration-300">
                        <a href="{{route ('agenda')}}" class="block px-4 py-2 font-semibold hover:text-jaune custom-border">Agenda</a>
                        <a href="{{route ('actualites')}}" class="block px-4 py-2 font-semibold hover:text-jaune">Actualités</a>
                    </div>     
                </div>



                
    
                <div class="h-24 hover:bg-jaune flex items-center px-6"> 
                    <a href="{{route ('nospartenaires')}}" class="text-lg font-medium">Nos partenaires</a>
                </div>
    
                <div class="h-24 hover:bg-jaune flex items-center px-6"> 
                    <a href="{{route ('contact')}}" class="text-lg font-medium">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    
    <main>
        @yield('content')
    </main>

    
 <footer class="bg-jaune p-6">

                <div class="flex flex-row justify-center items-start px-8">
                    <div class="flex flex-row mb-8 space-x-12 max-w-7xl">
                       
                        <div class="flex items-center flex-shrink-0">
                            <img src="{{ asset('storage/images/logofooter1.png') }}" alt="Logo Réseau LILAS" class="h-16"> <!-- Taille du logo augmentée -->
                        </div>  
                
                        <div class="space-x-16 flex">
                       
                        <div class="space-y-4">
                            <div class="text-base font-bold">S'engager</div>
                            <div class="flex flex-col space-y-4 text-base">
                                <a href="{{route ('devenir-adherente')}}" class="text-sm hover:font-bold transition-all duration-500">- Devenir adhérente</a>
                                <a href="{{route ('devenir-partenaire')}}" class="text-sm hover:font-bold transition-all duration-500">- Devenir partenaire</a>
                                <a href="{{route ('devenir-benevole')}}" class="text-sm hover:font-bold transition-all duration-500">- Devenir bénévole</a>
                                <a href="{{route ('recrutement')}}" class="text-sm hover:font-bold transition-all duration-500">- Postuler</a>

                            </div>
                        </div>
                
                        
                        <div class="space-y-4">
                            <div class="text-base font-bold">Horaires</div>
                            <div class="flex flex-col space-y-1 text-base">
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-calendar-days text-xl"></i>
                                    <div class="text-sm">
                                        Du Lundi au Vendredi <br> de 8h30 à 17h
                                    </div>
                                </div>
                            </div>
                        </div>
                
                        <div class="flex-1 space-y-4">
                            <div class="text-base font-bold">Contactez-nous</div>
                            <div class="flex flex-col space-y-4 text-base">
                                <a href="https://www.google.fr/maps/place/BeBOOSTER/@14.6048436,-61.0458183,17z/data=!3m1!4b1!4m6!3m5!1s0x8c6aa15d37fd051d:0x5fead3840118fcbe!8m2!3d14.6048384!4d-61.0432434!16s%2Fg%2F11smk9_zqk?entry=ttu&g_ep=EgoyMDI0MDgyMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="flex items-center space-x-2">
                                    <i class="fa-solid fa-location-dot text-xl"></i>
                                    <div class="text-sm">
                                        Centre d'Affaires BE BOOSTER, <br> 12 Rue des Arts et Métiers, <br> Fort-de-France 97200, Martinique
                                    </div>
                                </a>
                                <div class="flex items-center space-x-2">
                                    <i class="fa-solid fa-phone text-xl"></i>
                                    <div class="text-sm">0696 40 21 90</div>
                                </div>
                                <a href="mailto:adressemail@gmail.com" class="flex items-center space-x-2">
                                    <i class="fa-solid fa-envelope text-xl"></i>
                                    <div class="text-sm mb-1">adressemail@gmail.com</div>
                                </a>
                            </div>
                        </div>

                        <div class="flex-1 space-y-4">
                            <div class="text-base font-bold">Suivez-nous</div>
                            <div class="flex flex-col space-y-4 text-base">
                                
                                <div class="flex items-center space-x-2">
                                    <a href="https://www.facebook.com/p/R%C3%A9seau-LILAS-100081957576254/" target="_blank" class="text-2xl">
                                        <i class="fa-brands fa-square-facebook"></i>
                                    </a>
                                    <a href="https://www.instagram.com/reseaulilas/" target="_blank" class="text-2xl">
                                        <i class="fa-brands fa-square-instagram"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/r%C3%A9seau-l-i-l-a-s-49037421b/?originalSubdomain=mq" target="_blank" class="text-2xl">
                                        <i class="fa-brands fa-linkedin"></i>
                                    </a>    
                                </div>

                                <a href="https://chat.whatsapp.com/LT88YWEQe8UG1UsxWz9je9" target="_blank" class="flex">
                                        <i class="fa-brands fa-square-whatsapp mt-2 text-2xl"></i>
                                    <div class="text-center text-sm">
                                        Rejoignez notre groupe “Entrepreneuses 972”
                                    </div>
                                </a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        
        
        <div class="text-center border-t border-black">
            <div class="inline-flex items-center space-x-2 relative top-2.5">
                <a href="#" class="text-sm">Mentions légales</a>
                <span class="border-l border-black h-4"></span>
                <a href="#" class="text-sm">Politique de confidentialité</a>
                <span class="border-l border-black h-4"></span>
                <a href="#" class="text-sm">Conditions générales de vente</a>
                <span class="border-l border-black h-4"></span>
                <a href="#" class="text-sm">Plan du site</a>
            </div>
        </div>
    </footer>
    
    
         

        



<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>

</body>
</html>