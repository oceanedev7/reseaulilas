@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nous découvrir</title>

</head>
<body>
   
    @section('content')
    <div class="bg-jaune h-56 w-full flex justify-center items-center">
      <div class="font-black text-4xl uppercase"> Nous découvrir </div>
    </div>

     <div class="w-full p-12 flex items-center justify-center">
      <div class="flex flex-col md:flex-row items-center justify-center  md:space-x-20 space-y-8 md:space-y-0">
          <img class="h-96 w-96 rounded-xl object-cover transition-transform duration-500 transform hover:scale-105" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          
          <div class="flex flex-col items-center space-y-4">
              <div class="font-black text-3xl uppercase text-center">Notre histoire</div>
  
              @if ($aboutcontentView && $aboutcontentView->description)
                  <div class="max-w-3xl text-justify">{{ $aboutcontentView->description }}</div>
              @endif
          </div>
      </div>
  </div>
  
  <div class="w-full relative flex flex-col items-center justify-center p-4 md:p-12">
    <div class="absolute top-2 font-black text-3xl">
        NOS MISSIONS
    </div>

    <div class="mt-20 md:mt-14">
        <div class="flex flex-col items-center">
            <div class="flex flex-col space-y-16 md:space-y-0 justify-center items-center md:flex-row md:space-x-24">
                @foreach ($missionsView as $missionView)
                <div class="flex flex-col items-center justify-center space-y-1.5 rounded-xl w-full max-w-[200px] min-h-[200px]  bg-jaune bg-cover transition-transform transform hover:scale-150 hover:z-10 text-center p-2">
                    <div class="font-bold text-sm">{{ $missionView->titre }}</div>
                    <div class="text-xs">{{ $missionView->description }}</div>
                </div>  
                @endforeach
            </div>
        </div>
    </div>
</div>


  
<div class="w-full h-96">
  <div class="relative w-full h-3/5 flex flex-col items-center">
      <div class="font-black text-3xl mt-8 md:mt-8">RECONTREZ L'ÉQUIPE</div>
  </div>

  <div class="bg-jaune w-full relative h-2/5 flex flex-col items-center">
      <div class="relative w-full h-[400px] -translate-y-1/2">
          <div class="w-full h-full overflow-hidden  relative">
              <div id="slider" class="p-2 h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700 ">
                  @foreach ($teamsView as $teamView)
                  <div class="border border-black flex flex-shrink-0  flex-col items-center bg-white h-52 md:w-60 w-48 rounded-xl relative z-20">
                      <img class="h-36 md:w-60 w-full rounded-xl object-cover" src="{{ Storage::url($teamView->photo) }}" alt="">
                      <div class="flex flex-col items-center mt-1.5">
                          <div>{{ $teamView->prenom }} {{ $teamView->nom }}</div>
                          <div class="font-bold">{{ $teamView->fonction }}</div>
                      </div>
                  </div>
                  @endforeach
              </div>
          </div>
          <button aria-label="slide backward" class="absolute z-30 left-0 ml-4 top-1/2 transform -translate-y-1/2" id="prev">
              <i class="fa-solid fa-circle-arrow-left text-3xl text-black"></i>
          </button>
          <button aria-label="slide forward" class="absolute z-30 right-0 mr-4 top-1/2 transform -translate-y-1/2" id="next">
              <i class="fa-solid fa-circle-arrow-right text-3xl text-black"></i>
          </button>
      </div>
  </div>
</div>
  
  <div class="w-full p-10">
      <div class="uppercase text-3xl font-black text-center mt-2">Le réseau l.i.l.a.s c'est...</div>
  
      <div class="flex flex-col space-y-12 md:space-y-0 md:flex-row md:space-x-20 items-center mt-12"> 
          @foreach ($numbersView as $numberView)
          <div class="flex flex-col text-center space-y-4 items-center justify-center">
              <div class="bordered-text">{{ $numberView->chiffre }}</div>
              <div class="uppercase font-bold text-xl">{{ $numberView->titre }}</div>
          </div>
          @endforeach
      </div>
  </div>
  
    @endsection

   
</body>
</html>

