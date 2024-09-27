@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  </head>
<body>

    @section('title', 'Accueil')

    @section('content')

    <div class="relative h-80 w-full">
        <img class="h-80 w-full object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="Photo accueil">
    </div>

    <div class="relative z-10 flex justify-center">
        
        <div class="absolute -top-20 bg-jaune h-40 w-7/10 p-6 rounded-xl flex items-center justify-center space-x-6 shadow-lg">
          @foreach ($globalsView as $key => $globalView)
    <div class="flex flex-col items-center text-center">
        <div class="font-black text-6xl counter" data-target="{{$globalView->titre}}">0%</div>
        <div class="text-sm max-w-72">{{$globalView->description}}</div>
    </div>
    
    @if ($key < count($globalsView) - 1)
        <div class="h-full border-l-2 border-black"></div>
    @endif
@endforeach
          
        </div>
    </div>

    <div class="h-96 w-full flex justify-center items-center"> 

      <div class="max-w-5xl border-2 border-jaune rounded-xl relative top-28">

<div class="text-justify p-8">
  Le Réseau L.I.L.A.S. transforme l'entrepreneuriat en un outil puissant d'inclusion sociale et d'autonomie financière pour les femmes.

Fondé avec la conviction que chaque entrepreneuse doit avoir les moyens de réussir, notre mission est de renforcer le pouvoir des entrepreneures martiniquaises à travers la solidarité et l'innovation.
Notre engagement est d'accompagner ces femmes vers l'autonomie financière grâce à un soutien annuel.

Nous abordons des défis clés, tels que la stratégie de développement, la conciliation vie personnelle et professionnelle, et la prévention du surendettement, souvent rencontrés dans les premières étapes de l’entrepreneuriat.

Notre vision est ambitieuse : devenir un réseau d’entrepreneuses, présente dans les territoires où l’entrepreneuriat féminin peut être un levier d’inclusion et de résilience.
</div>

         </div>


    </div>
    
       <div class="w-full h-screen">

        <div class="uppercase text-3xl font-black text-center relative top-32"> Les raisons de rejoindre notre réseau </div>

        <div class="flex flex-row justify-center items-center space-x-12 mt-52">

          @foreach ($networksView as $networkView)
            
          
          <div class="relative bg-white max-w-xs rounded-xl custom-shadow w-60 h-72 overflow-hidden ">
            <div class="absolute top-0 left-0 w-full h-2/5 bg-jaune flex justify-center items-center">
              <i class="fa-solid fa-plus text-6xl "></i>
            </div>
            <div class="relative z-10 p-4 h-full flex items-center justify-center text-center mt-14">
              {{$networkView->description}}           
            </div>
        </div>
@endforeach
  
        </div>

       </div>
    
  
    
       <div class="w-full h-[500px] overflow-hidden">  
        <div class="uppercase text-3xl font-black text-center">Nos formules</div>
        
        <div class="container flex w-full items-center justify-center relative">
    
            <div class="carousel flex items-center justify-center relative">
                @foreach ($formulesView as $index => $formuleView)
                    <div style="transform: rotateY({{ $index * (360 / count($formulesView)) }}deg) translateZ(250px);" class="p-4 space-y-4 flex flex-col item border border-2 border-jaune bg-white absolute w-[250px] h-[200px] text-black rounded-xl">
                        <div class="uppercase text-lg text-center font-bold text-black">{{ $formuleView->titre }}</div>
                        <div class="text-justify whitespace-normal text-xs text-black">
                            {{ $formuleView->presentation }}
                        </div>
                        <a href="{{route('accueil-formule-details', $formuleView->id)}}" class="bg-jaune text-black text-center rounded mx-auto py-1 px-2 text-xs">
                            Voir plus <i class="fa-solid fa-circle-arrow-right ml-1"></i>
                        </a>
                    </div>
                @endforeach
            </div>
            
            <div class="next cursor-pointer"><i class="fa-solid fa-circle-arrow-right text-4xl"></i></div>
            <div class="prev cursor-pointer"><i class="fa-solid fa-circle-arrow-left text-4xl"></i></div>
    
        </div>
    </div>
    
  
   
    <div class="w-full h-screen">
      <div class="relative w-full h-3/5 flex justify-center">
          <div class="mt-20 font-black text-3xl uppercase">
            Témoignages inspirants
          </div>
      </div>

      <div class="bg-jaune w-full relative h-2/5 flex flex-row justify-center space-x-6">
 @foreach ($reviewsView  as $reviewView)
   

        <div class="relative">
          <i class="fa-solid fa-quote-left text-jaune text-8xl absolute -top-36 right-6 z-10"></i>
          <div class=" w-[400px] h-[200px]  bg-white -translate-y-1/2 flex flex-col justify-center max-w-sm min-h-min rounded-xl custom-shadow p-6 text-center overflow-auto">
              <div class="mt-4">
            <div>
              {{$reviewView->description}}              
            </div>
              <div class="mt-2 font-semibold">{{$reviewView->nom}}</div>
              </div>
          </div>
      </div> @endforeach
  </div>

  </div>

        
    <div class="h-60 w-full p-8">
        <div class="text-center font-black text-2xl"> ILS NOUS SOUTIENNENT </div> 
    
        <div class="w-full overflow-hidden whitespace-nowrap relative mt-8">
          <div id="caroussel" class="flex shrink-0 whitespace-nowrap">
              @foreach ($logosView as $logoView)
                  <img class="max-h-24 mx-4" src="{{ Storage::url($logoView->photo) }}" alt="">
              @endforeach
              @foreach ($logosView as $logoView)
                  <img class="max-h-24 mx-4" src="{{ Storage::url($logoView->photo) }}" alt="">
              @endforeach
          </div>
      </div>
      
      
    
    </div>

  
    @endsection
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const caroussel = document.getElementById('caroussel');
    const logos = caroussel.querySelectorAll('img');
    
    // Calculer la largeur totale du carrousel
    let totalWidth = 0;
    logos.forEach(logo => {
        totalWidth += logo.offsetWidth + parseInt(window.getComputedStyle(logo).marginRight) * 2;
    });

    // Répéter les éléments pour un défilement infini
    caroussel.style.width = `${totalWidth}px`;

    // Appliquer l'animation avec JavaScript
    let animationDuration = 30; // Durée de l'animation en secondes (ajustez comme nécessaire)
    caroussel.animate(
        [
            { transform: 'translateX(0)' }, // Départ
            { transform: `translateX(-${totalWidth / 2}px)` } // Fin (la moitié des éléments dupliqués)
        ],
        {
            duration: animationDuration * 1000, // Convertir en millisecondes
            iterations: Infinity, // Animation infinie
            easing: 'linear' // Animation fluide
        }
    );
});

</script>