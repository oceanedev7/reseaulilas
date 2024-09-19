@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
    @section('title', 'Nous découvrir')

    @section('content')
    <div class="bg-jaune h-56 w-full flex justify-center items-center">
      <div class="font-black text-4xl uppercase"> Nous découvrir </div>
    </div>

    <div class="w-full h-screen p-12 flex items-center justify-center"> 

      <div class="flex items-center justify-center space-x-24">
        <img class="h-96 w-96 rounded-xl object-cover transition-transform duration-500 transform hover:scale-105" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">     <div class="flex flex-col items-center space-y-4"> 
        <div class="font-black text-3xl uppercase text-center">  Notre histoire </div>
      
        <div class="max-w-2xl text-justify">{{$aboutcontentView->description}}</div>

      </div>
    </div>

    </div>


    <div class="h-[400px] w-full relative flex items-center justify-center">

      <div class="absolute top-2 left-1/2 -translate-x-1/2 font-black text-3xl">
          NOS MISSIONS
      </div>
  
    
<div class="mt-10">
    <div class="absolute inset-0  mt-10 flex items-center justify-center pointer-events-none">
      <div class="h-1 bg-jaune" style="width: calc(100% - 400px);"></div> <!-- Ajuster la largeur du trait -->
  </div>

  <div class="flex justify-center space-x-44">
    @foreach ($missionsView as $missionView)
    <div class="flex flex-col items-center justify-center space-y-1.5 rounded-xl w-[120px] h-[120px] bg-jaune bg-cover transition-transform transform hover:scale-250 hover:z-10 text-center p-2">
        <div class="font-bold text-sm">{{ $missionView->titre }}</div>
        <div class="text-xs">{{ $missionView->description }}</div>
       
      </div>  
     
      @endforeach
    </div>
</div>
  </div>

 
    </div>
    
 
  
   

    <div class="w-full h-96">
        <div class="relative w-full h-3/5 flex justify-center">
            <div class="font-black text-3xl">
                RECONTREZ L'ÉQUIPE
            </div>
        </div>

        <div class="bg-jaune w-full relative h-2/5 flex flex-row">
        
              <div class="relative w-full h-[400px] -translate-y-1/2">
               
                <div class="w-full h-full overflow-hidden relative ">
                 
                  <div id="slider" class="p-2  h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                  
                    <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-52 w-60 rounded-xl relative z-20">
                      <img class="h-36 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                      <div class="flex flex-col items-center mt-1.5">
                        <div>Marie DUPOND</div>
                        <div class="font-bold">Directrice Commerciale</div>
                      </div>
                    </div>
                    
                    <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-52 w-60 rounded-xl relative z-20">
                      <img class="h-36 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                      <div class="flex flex-col items-center mt-1.5">
                        <div>Marie DUPOND</div>
                        <div class="font-bold">Directrice Commerciale</div>
                      </div>
                    </div>
                    
                    <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-52 w-60 rounded-xl relative z-20">
                      <img class="h-36 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                      <div class="flex flex-col items-center mt-1.5">
                        <div>Marie DUPOND</div>
                        <div class="font-bold">Directrice Commerciale</div>
                      </div>
                    </div>
                    
                    <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-52 w-60 rounded-xl relative z-20">
                      <img class="h-36 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                      <div class="flex flex-col items-center mt-1.5">
                        <div>Marie DUPOND</div>
                        <div class="font-bold">Directrice Commerciale</div>
                      </div>
                    </div>
                    
                    <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-52 w-60 rounded-xl relative z-20">
                      <img class="h-36 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                      <div class="flex flex-col items-center mt-1.5">
                        <div>Marie DUPOND</div>
                        <div class="font-bold">Directrice Commerciale</div>
                      </div>
                    </div>
                    
                    <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-52 w-60 rounded-xl relative z-20">
                      <img class="h-36 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                      <div class="flex flex-col items-center mt-1.5">
                        <div>Marie DUPOND</div>
                        <div class="font-bold">Directrice Commerciale</div>
                      </div>
                    </div>
                    
                    <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-52 w-60 rounded-xl relative z-20">
                      <img class="h-36 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                      <div class="flex flex-col items-center mt-1.5">
                        <div>Marie DUPOND</div>
                        <div class="font-bold">Directrice Commerciale</div>
                      </div>
                    </div>
                    <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-52 w-60 rounded-xl relative z-20">
                      <img class="h-36 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                      <div class="flex flex-col items-center mt-1.5">
                        <div>Marie DUPOND</div>
                        <div class="font-bold">Directrice Commerciale</div>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <button aria-label="slide backward" class="absolute z-30 left-0 ml-4 top-1/2 transform -translate-y-1/2" id="prev">
                  <i class="fa-solid fa-circle-arrow-left text-3xl text-white"></i>
              </button>
              <button aria-label="slide forward" class="absolute z-30 right-0 mr-4 top-1/2 transform -translate-y-1/2" id="next">
                  <i class="fa-solid fa-circle-arrow-right text-3xl text-white"></i>
              </button>
              </div>
              
          
            </div>

    </div>



    <div class="w-full h-96 p-10"> 
      <div class="uppercase text-3xl font-black text-center mt-2"> Le réseau lilas c'est... </div>

      <div class="flex items-center justify-center space-x-28 mt-6"> 
      
        @foreach ($numbersView as $numberView)
        <div class="flex flex-col text-center">
        <div class="bordered-text">{{$numberView->chiffre}}</div>
        <div class="uppercase font-bold text-xl">{{$numberView->titre}}</div>
      </div>
@endforeach
      


      </div>

    </div>

    @endsection

   
</body>
</html>

