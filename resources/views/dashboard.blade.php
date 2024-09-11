<x-app-layout>


    <div class="flex items-center justify-center mt-16">
        <div class="grid grid-cols-2 gap-y-8 gap-x-16 justify-items-center ">
            <a href="{{route ('contenu')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
                <i class="fa-solid fa-pencil text-3xl"></i>
                <div class="text-lg font-bold text-center"> Gérer le contenu </div>
            </a>
            <a href="{{route ('event')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2"> 
                <i class="fa-solid fa-calendar-days text-3xl"></i>
               <div class="text-lg font-bold text-center"> Gérer les <br> évènements </div>
            </a>
            <a href="{{route ('actu')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
                <i class="fa-solid fa-newspaper text-3xl"></i> 
               <div class="text-lg font-bold text-center"> Gérer <br> les actualités </div>
            </a>
            <a href="{{route ('emploi')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2"> 
                <i class="fa-solid fa-briefcase text-3xl"></i>
               <div class="text-lg font-bold text-center"> Gérer les <br> offres d'emplois </div>
            </a>
        </div>
    </div>
    
  
</x-app-layout>
