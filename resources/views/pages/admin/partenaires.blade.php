<x-app-layout>

    <a href="{{route ('contenu')}}" class="hover:underline relative top-8 left-8"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer le contenu
    </a>

<div class="flex items-center justify-center space-x-12 mt-40">  

      <a href="{{route ('partner-logo')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
          <i class="fa-solid fa-pencil text-3xl"></i>
          <div class="text-lg font-bold text-center"> Gérer les logos <br> des partenaires </div>
      </a>
      <a href="{{route ('partners')}}" class="w-[200px] h-[150px] bg-jaune rounded-xl flex flex-col justify-center items-center space-y-2">
          <i class="fa-solid fa-pencil text-3xl"></i>
          <div class="text-lg font-bold text-center"> Gérer le texte <br> de remerciement </div>
      </a>
      
  </div>



</x-app-layout>
