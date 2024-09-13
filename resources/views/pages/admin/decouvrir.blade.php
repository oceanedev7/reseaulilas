<x-app-layout>

    <a href="{{route ('contenu')}}" class="hover:underline relative top-8 left-8"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer le contenu
    </a>

<div class="flex items-center justify-center space-x-12 mt-40">  

      <a href="{{route ('about-content')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
          <i class="fa-solid fa-pencil text-3xl"></i>
          <div class="text-lg font-bold text-center"> Gérer le texte <br> 'Notre histoire' </div>
      </a>

      <a href="{{route ('missions')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
        <i class="fa-solid fa-pencil text-3xl"></i>
        <div class="text-lg font-bold text-center"> Gérer les missions </div>
    </a>
    <a href="{{route ('team-content')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
        <i class="fa-solid fa-pencil text-3xl"></i>
        <div class="text-lg font-bold text-center"> Gérer les <br> membres de l'équipe </div>
    </a>
      <a href="" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
          <i class="fa-solid fa-pencil text-3xl"></i>
          <div class="text-lg font-bold text-center"> Gérer les <br> statistiques <br> liées au réseau </div>
      </a>
      
    
      
  </div>



</x-app-layout>