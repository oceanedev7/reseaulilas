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



    @endsection
</body>
</html>