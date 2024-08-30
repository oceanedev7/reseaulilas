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
        
        <div class="absolute -top-20 bg-jaune h-40 w-7/10 p-6 rounded-xl flex items-center justify-center space-x-8 shadow-lg">
            
            <div class="flex flex-col items-center text-center">
                <div class="font-black text-6xl" id="counter1"></div>
                <div class="text-sm">des entreprises sont <br> créées par des femmes</div>
            </div>
    
       
            <div class="h-full border-l-2 border-black"></div>
    
            <div class="flex flex-col items-center text-center">
                <div class="font-black text-6xl" id="counter2"></div>
                <div class="text-sm">des entrepreneuses sans <br> réseau ne se rémunèrent pas</div>
            </div>
    
            
            <div class="h-full border-l-2 border-black"></div>
    
            <div class="flex flex-col items-center text-center ">
                <div class="font-black text-6xl" id="counter3"></div>
                <div class="text-sm">d'entrepreuneuses <br> manque de financements</div>
            </div>
    
        
            <div class="h-full border-l-2 border-black"></div>
    
            <div class="flex flex-col items-center text-center">
                <div class="font-black text-6xl">90%</div>
                <div class="text-sm">des entreprises sont <br> créées par des femmes</div>
            </div>
        </div>
    </div>
    
       <div class="w-full h-screen">

        <div class="uppercase text-3xl font-black text-center relative top-32"> Les raisons de rejoindre notre réseau </div>

        <div class="flex flex-row justify-center items-center space-x-24 mt-52">

          <div class="relative bg-white max-w-xs rounded-xl custom-shadow w-60 h-72 overflow-hidden ">
            <div class="absolute top-0 left-0 w-full h-2/5 bg-jaune flex justify-center items-center">
              <i class="fa-solid fa-plus text-6xl "></i>
            </div>
            <div class="relative z-10 p-4 h-full flex items-center justify-center text-center mt-14">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur.
            </div>
        </div>

        <div class="relative bg-white max-w-xs rounded-xl custom-shadow w-60 h-72 overflow-hidden ">
          <div class="absolute top-0 left-0 w-full h-2/5 bg-jaune flex justify-center items-center">
            <i class="fa-solid fa-plus text-6xl "></i></div>
            <div class="relative z-10 p-4 h-full flex items-center justify-center text-center mt-14">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur.
            </div>
      </div>

      <div class="relative bg-white max-w-xs rounded-xl custom-shadow w-60 h-72 overflow-hidden ">
        <div class="absolute top-0 left-0 w-full h-2/5 bg-jaune flex justify-center items-center">
          <i class="fa-solid fa-plus text-6xl "></i>
        </div>
        <div class="relative z-10 p-4 h-full flex items-center justify-center text-center mt-14">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur.
        </div>
    </div>
        
        </div>

       </div>
    
      

        <div class="w-full h-screen p-12"> 

        <div class="text-center text-3xl font-black"> NOS FORMULES </div>
        
        <div class="scene">
          <div class="carousel">
            <div class="carousel__cell">1</div>
            <div class="carousel__cell">2</div>
            <div class="carousel__cell">3</div>
            <div class="carousel__cell">4</div>
            <div class="carousel__cell">5</div>
            <div class="carousel__cell">6</div>
            <div class="carousel__cell">7</div>
            <div class="carousel__cell">8</div>
            <div class="carousel__cell">9</div>
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
   
   
    <div class="w-full h-screen">
      <div class="relative w-full h-3/5 flex justify-center">
          <div class="mt-20 font-black text-3xl uppercase">
            Témoignages inspirants
          </div>
      </div>

      <div class="bg-jaune w-full relative h-2/5 flex flex-row justify-center space-x-6">

        <div class="relative">
          <i class="fa-solid fa-quote-left text-jaune text-8xl absolute -top-36 right-6 z-10"></i>
          <div class="bg-white -translate-y-1/2 flex flex-col justify-center max-w-sm min-h-min rounded-xl custom-shadow p-6 text-center overflow-auto">
              <div class="mt-4">
            <div>
                  Participer à l'atelier sur l'entrepreneuriat a été une expérience déterminante pour moi. Les sessions étaient enrichissantes, pratiques et pleines de conseils concrets.
              </div>
              <div class="mt-2 font-semibold">Marie DUPOND</div>
              </div>
          </div>
      </div>
      <div class="relative">
        <i class="fa-solid fa-quote-left text-jaune text-8xl absolute -top-36 right-6 z-10"></i>
        <div class="bg-white -translate-y-1/2 flex flex-col justify-center max-w-sm min-h-min rounded-xl custom-shadow p-6 text-center overflow-auto">
            <div class="mt-4">
          <div>
                Participer à l'atelier sur l'entrepreneuriat a été une expérience déterminante pour moi. Les sessions étaient enrichissantes, pratiques et pleines de conseils concrets.
            </div>
            <div class="mt-2 font-semibold">Marie DUPOND</div>
            </div>
        </div>
    </div>
    <div class="relative">
      <i class="fa-solid fa-quote-left text-jaune text-8xl absolute -top-36 right-6 z-10"></i>
      <div class="bg-white -translate-y-1/2 flex flex-col justify-center max-w-sm min-h-min rounded-xl custom-shadow p-6 text-center overflow-auto">
          <div class="mt-4">
        <div>
              Participer à l'atelier sur l'entrepreneuriat a été une expérience déterminante pour moi. Les sessions étaient enrichissantes, pratiques et pleines de conseils concrets.
          </div>
          <div class="mt-2 font-semibold">Marie DUPOND</div>
          </div>
      </div>
    </div>
  </div>

  </div>
        
    <div class="h-60 w-full p-8">
        <div class="text-center font-black text-2xl"> ILS NOUS SOUTIENNENT </div> 
    
    <div class="overflow-hidden whitespace-nowrap relative mt-8">
        <div class="flex animate-caroussel">
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