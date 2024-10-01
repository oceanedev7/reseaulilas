@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réseau L.I.L.A.S. - Entrepreneuriat des femmes</title>
    <meta name="description" content="Le Réseau L.I.L.A.S. accompagne les femmes entrepreneures en Martinique pour leur permettre de vivre de leur activité sans sacrifier leur vie personnelle. Rejoignez nous pour vous enrichir de cette communauté bienveillante et professionnelle.">


  </head>
<body>

    @section('content')

    <div class="relative h-80 w-full">
        <img class="h-80 w-full object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="Photo accueil">
    </div>


    <div class="relative z-10 flex justify-center">
      <div class="absolute -top-20 bg-jaune md:h-40 md:w-7/10 p-4 md:p-6 mx-h md:flex md:flex-row rounded-xl grid grid-cols-2 gap-4 items-center justify-center space-x-4 md:space-x-6 shadow-lg">
          @foreach ($globalsView as $key => $globalView)
              <div class="flex flex-col items-center text-center ">
                  <div class="font-black text-5xl md:text-6xl counter" data-target="{{$globalView->titre}}">0%</div>
                  <div class=" text-sm max-w-96">{{$globalView->description}}</div>
              </div>
              
              @if ($key < count($globalsView) - 1)
                  <div class="border-l-2 border-black h-full hidden md:block"></div>
              @endif
          @endforeach
            </div>
     </div>


    <div class="w-full flex justify-center items-center relative top-6"> 
      <div class="max-w-5xl border-2 border-jaune rounded-xl relative top-32 md:top-28 mx-4 md:mx-8"> 
          <div class="text-justify p-8">
              Le Réseau L.I.L.A.S. transforme l'entrepreneuriat en un outil puissant d'inclusion sociale et d'autonomie financière pour les femmes.
  
              Fondé avec la conviction que chaque entrepreneuse doit avoir les moyens de réussir, notre mission est de renforcer le pouvoir des entrepreneures martiniquaises à travers la solidarité et l'innovation.
              Notre engagement est d'accompagner ces femmes vers l'autonomie financière grâce à un soutien annuel.
  
              Nous abordons des défis clés, tels que la stratégie de développement, la conciliation vie personnelle et professionnelle, et la prévention du surendettement, souvent rencontrés dans les premières étapes de l’entrepreneuriat.
  
              Notre vision est ambitieuse : devenir un réseau d’entrepreneuses, présente dans les territoires où l’entrepreneuriat féminin peut être un levier d’inclusion et de résilience.
          </div>
      </div>
  </div>
  
  

       <div class="w-full">
        <h2 class="uppercase text-3xl font-black text-center relative top-44">Les raisons de rejoindre notre réseau</h2>
    
        <div class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-12 mt-56">
            @foreach ($networksView as $networkView)
                <div class="relative bg-white max-w-xs rounded-xl custom-shadow w-60 h-72 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-2/5 bg-jaune flex justify-center items-center">
                        <i class="fa-solid fa-plus text-6xl"></i>
                    </div>
                    <div class="relative z-10 p-4 h-full flex items-center justify-center text-center mt-14">
                        {{$networkView->description}}           
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    
    <div class="w-full h-[500px] overflow-hidden">  
      <h2 class="uppercase text-3xl font-black text-center relative top-20">Nos formules</h2>
      
      <div class="container flex w-full items-center justify-center relative top-6">
          <div class="carousel flex items-center justify-center relative">
              @foreach ($formulesView as $index => $formuleView)
                  <div style="transform: rotateY({{ $index * (360 / count($formulesView)) }}deg) translateZ(250px);" class="p-4 space-y-4 flex flex-col item border border-2 border-jaune bg-white absolute w-[250px] h-[200px] text-black rounded-xl">
                      <div class="uppercase text-lg text-center font-bold text-black">{{ $formuleView->titre }}</div>
                      <div class="text-justify whitespace-normal text-xs text-black">
                          {{ $formuleView->presentation }}
                      </div>
                      <a href="{{ route('accueil-formule-details', $formuleView->id) }}" class="bg-jaune text-black text-center rounded mx-auto py-1 px-2 text-xs">
                          Voir plus <i class="fa-solid fa-circle-arrow-right ml-1"></i>
                      </a>
                  </div>
              @endforeach
          </div>
          
          <!-- Flèche précédente -->
          <div class="prev cursor-pointer absolute left-0 transform -translate-y-1/2 mr-16 md:ml-16">
              <i class="fa-solid fa-circle-arrow-left text-4xl"></i>
          </div>
          
          <!-- Flèche suivante -->
          <div class="next cursor-pointer absolute right-0 transform -translate-y-1/2 ml-16 md:mr-16">
              <i class="fa-solid fa-circle-arrow-right text-4xl"></i>
          </div>
      </div>
  </div>
  
  
  <div class="w-full ">
    <div class="relative w-full h-3/5 flex justify-center">
        <h2 class="mt-4 font-black text-3xl uppercase">
            Témoignages inspirants
        </h2>
    </div>

    <div class="bg-jaune w-full relative h-2/5 mt-44 flex flex-col space-y-12 md:space-y-0 items-center md:flex-row justify-center md:space-x-6 px-4 md:px-8">
      @foreach ($reviewsView as $reviewView)
          <div class="relative mb-4 md:mb-0">
              <i class="fa-solid fa-quote-left text-jaune text-8xl absolute -top-36 right-6 z-10"></i>
              <div class="w-full max-w-[400px]  bg-white -translate-y-1/2 flex flex-col justify-center rounded-xl custom-shadow p-6 text-center overflow-auto">
                  <div class="mt-4">
                      <div>
                          {{$reviewView->description}}              
                      </div>
                      <div class="mt-2 font-semibold">{{$reviewView->nom}}</div>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
  
</div>


        
    <div class="h-60 w-full p-8">
        <h2 class="text-center font-black text-3xl"> ILS NOUS SOUTIENNENT </h2> 
    
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

