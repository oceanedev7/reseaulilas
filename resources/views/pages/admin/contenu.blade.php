<x-app-layout>

          <a href="{{route ('dashboard')}}" class="absolute top-36 left-8 text-3xl"> <i class="fa-solid fa-house"></i> </a>


    <div class="flex items-center justify-center space-x-12 mt-40">  

            <a href="{{route ('accueil-admin')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
                <i class="fa-solid fa-pencil text-3xl"></i>
                <div class="text-lg font-bold text-center"> Gérer la page <br> Accueil </div>
            </a>
            <a href="{{route ('decouvrir-admin')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
                <i class="fa-solid fa-pencil text-3xl"></i>
                <div class="text-lg font-bold text-center"> Gérer la page <br> Nous découvrir </div>
            </a>
           
            <a href="{{route ('partenaires-admin')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
                <i class="fa-solid fa-pencil text-3xl"></i>
                <div class="text-lg font-bold text-center"> Gérer la page <br> Nos partenaires </div>
            </a>
            <a href="{{route ('contact-admin')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
                <i class="fa-solid fa-pencil text-3xl"></i>
                <div class="text-lg font-bold text-center"> Gérer la page <br> Contact </div>
            </a>
        </div>
    
    
  
</x-app-layout>
