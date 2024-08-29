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
        
        <div class="absolute -top-20 bg-jaune h-40 w-7/10 p-6 rounded-xl flex items-center justify-center space-x-16 shadow-lg">
            
            <div class="flex flex-col items-center text-center">
                <div class="font-black text-6xl" id="counter1">0</div>
                <div class="text-xl">adhérentes</div>
            </div>
    
       
            <div class="h-full border-l-2 border-black"></div>
    
            <div class="flex flex-col items-center text-center">
                <div class="font-black text-6xl" id="counter2">14</div>
                <div class="text-xl">partenaires</div>
            </div>
    
            
            <div class="h-full border-l-2 border-black"></div>
    
            <div class="flex flex-col items-center text-center ">
                <div class="font-black text-6xl" id="counter3">11</div>
                <div class="text-xl">rencontres</div>
            </div>
    
        
            <div class="h-full border-l-2 border-black"></div>
    
            <div class="flex flex-col items-center text-center">
                <div class="font-black text-6xl">90</div>
                <div class="text-xl">adhérentes</div>
            </div>
        </div>
    </div>
    
       
        <div class="w-full h-screen">
            <div class="relative w-full h-3/5 flex justify-center">
                <div class="mt-20 font-black text-3xl">
                    RECONTREZ L'ÉQUIPE
                </div>
            </div>

            <div class="bg-jaune w-full relative h-2/5 flex flex-row">
            
                  <div class="relative w-full h-[400px] -translate-y-1/2">
                   
                    <div class="w-full h-full overflow-hidden relative ">
                     
                      <div id="slider" class="p-2  h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                      
                        <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-64 w-60 rounded-xl relative z-20">
                          <img class="h-40 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                          <div class="flex flex-col items-center justify-center mt-6">
                            <div>Marie DUPOND</div>
                            <div class="font-bold">Directrice Commerciale</div>
                          </div>
                        </div>
                        <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-64 w-60 rounded-xl relative z-20">
                            <img class="h-40 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                            <div class="flex flex-col items-center justify-center mt-6">
                              <div>Marie DUPOND</div>
                              <div class="font-bold">Directrice Commerciale</div>
                            </div>
                          </div>
                          <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-64 w-60 rounded-xl relative z-20">
                            <img class="h-40 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                            <div class="flex flex-col items-center justify-center mt-6">
                              <div>Marie DUPOND</div>
                              <div class="font-bold">Directrice Commerciale</div>
                            </div>
                          </div>
                          <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-64 w-60 rounded-xl relative z-20">
                            <img class="h-40 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                            <div class="flex flex-col items-center justify-center mt-6">
                              <div>Marie DUPOND</div>
                              <div class="font-bold">Directrice Commerciale</div>
                            </div>
                          </div>
                          <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-64 w-60 rounded-xl relative z-20">
                            <img class="h-40 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                            <div class="flex flex-col items-center justify-center mt-6">
                              <div>Marie DUPOND</div>
                              <div class="font-bold">Directrice Commerciale</div>
                            </div>
                          </div>
                          <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-64 w-60 rounded-xl relative z-20">
                            <img class="h-40 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                            <div class="flex flex-col items-center justify-center mt-6">
                              <div>Marie DUPOND</div>
                              <div class="font-bold">Directrice Commerciale</div>
                            </div>
                          </div>
                          <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-64 w-60 rounded-xl relative z-20">
                            <img class="h-40 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                            <div class="flex flex-col items-center justify-center mt-6">
                              <div>Marie DUPOND</div>
                              <div class="font-bold">Directrice Commerciale</div>
                            </div>
                          </div>
                          <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-64 w-60 rounded-xl relative z-20">
                            <img class="h-40 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                            <div class="flex flex-col items-center justify-center mt-6">
                              <div>Marie DUPOND</div>
                              <div class="font-bold">Directrice Commerciale</div>
                            </div>
                          </div>
                          <div class="border border-black flex flex-shrink-0 w-full sm:w-auto flex-col items-center bg-white h-64 w-60 rounded-xl relative z-20">
                            <img class="h-40 w-60 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                            <div class="flex flex-col items-center justify-center mt-6">
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

        <div class="w-full h-screen p-12"> 

        <div class="text-center text-3xl font-black"> NOS FORMULES </div>

        <div class="relative mx-auto my-[40px] w-[210px] h-[140px] perspective-[1000px]">
          <div class=" carousel absolute w-full h-full transform-gpu transition-transform duration-1000" style="transform: translateZ(-288px); transform-style: preserve-3d;">
              <div style="transform: rotateY(0deg) translateZ(288px);" class="bg-blue-300 absolute w-[190px] h-[120px] left-[10px] top-[10px] border-2 border-black leading-[116px] text-[80px] font-bold  text-center">1</div>
              <div style="transform: rotateY(40deg) translateZ(288px);" class="bg-red-300 absolute w-[190px] h-[120px] left-[10px] top-[10px] border-2 border-black leading-[116px] text-[80px] font-bold  text-center">2</div>
              <div style="transform: rotateY(80deg) translateZ(288px);" class="bg-gray-300 absolute w-[190px] h-[120px] left-[10px] top-[10px] border-2 border-black leading-[116px] text-[80px] font-bold  text-center">3</div>
              <div style="transform: rotateY(120deg) translateZ(288px);" class="bg-green-300 absolute w-[190px] h-[120px] left-[10px] top-[10px] border-2 border-black leading-[116px] text-[80px] font-bold  text-center">4</div>
              <div style="transform: rotateY(160deg) translateZ(288px);" class="bg-yellow-300 absolute w-[190px] h-[120px] left-[10px] top-[10px] border-2 border-black leading-[116px] text-[80px] font-bold  text-center">5</div>
            </div>
          </div>
<p style="text-align: center;">
  <button class="previous-button">Previous</button>
  <button class="next-button">Next</button>
</p>
        </div>
          
        
    {{-- <div class="bg-gray-700 flex items-center justify-center p-60 relative">

        <div class="absolute top-4 left-1/2 -translate-x-1/2 font-black text-3xl ">
            NOS FORMULES
        </div>
    
        <div class="relative w-[400px] h-[400px] flex items-center justify-center">
            <!-- Cercle -->
            <div class="absolute rounded-full border-2 border-jaune w-full h-full bg-transparent"></div>
    
            <!-- Top card -->
            <div class="rounded-xl absolute w-[150px] h-[150px] bg-cover bg-center -translate-y-[200px] transition-transform transform hover:scale-220 hover:z-10 flex flex-col justify-center items-center text-center p-2 box-border overflow-hidden" style="background-image: url('{{ asset('storage/images/photoaccueil.jpg') }}');">
                <div class="font-bold"> LOREM IPSUM </div>
                <div class="text-xs"> Vestibulum egestas vehicula augue, vitae suscipit urna congue in. Pellentesque egestas gravida felis quis convallis. </div>
            </div>
            
    
            <!-- Right card -->
            <div class="rounded-xl absolute w-[150px] h-[150px] bg-cover bg-center top-1/2 left-full -translate-x-[60%] -translate-y-[60%] transition-transform transform hover:scale-220 hover:z-10 flex flex-col justify-center items-center text-center p-2 box-border overflow-hidden" style="background-image: url('{{ asset('storage/images/photoaccueil.jpg') }}');">
                <div class="font-bold"> LOREM IPSUM </div>
                <div class="text-xs"> Vestibulum egestas vehicula augue, vitae suscipit urna congue in. Pellentesque egestas gravida felis quis convallis. </div>
            </div>
    
            <!-- Left card -->
            <div class="rounded-xl absolute w-[150px] h-[150px] bg-cover bg-center top-1/2 left-0 -translate-x-1/2 -translate-y-[60%] transition-transform transform hover:scale-220 hover:z-10"
                style="background-image: url('{{ asset('storage/images/photoaccueil.jpg') }}');">
            </div>
    
            <!-- Bottom card -->
            <div class="rounded-xl absolute w-[150px] h-[150px] bg-cover bg-center bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 transition-transform transform hover:scale-220 hover:z-10"
                style="background-image: url('{{ asset('storage/images/photoaccueil.jpg') }}');">
            </div>
        </div>
    </div> --}}
   
    
        

    <div class="h-60 w-full bg-gray-200 p-8">
        <div class="text-center font-black text-2xl"> ILS NOUS SOUTIENNENT </div> 
    
    <div class="overflow-hidden whitespace-nowrap relative mt-8">
        <div class="flex items-center animate-caroussel">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
          <img class="max-h-24 mx-2" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
        </div>
      </div>
    
    </div>
    

    @endsection
    


</body>
</html>