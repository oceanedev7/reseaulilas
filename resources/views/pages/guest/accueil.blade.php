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
                <div class="font-black text-6xl" id="counter1">35</div>
                <div class="text-sm">des entreprises sont <br> créées par des femmes</div>
            </div>
    
       
            <div class="h-full border-l-2 border-black"></div>
    
            <div class="flex flex-col items-center text-center">
                <div class="font-black text-6xl" id="counter2">48</div>
                <div class="text-sm">des entrepreneuses sans <br> réseau ne se rémunèrent pas</div>
            </div>
    
            
            <div class="h-full border-l-2 border-black"></div>
    
            <div class="flex flex-col items-center text-center ">
                <div class="font-black text-6xl" id="counter3">89</div>
                <div class="text-sm">d'entrepreuneuses <br> manque de financements</div>
            </div>
    
        
            <div class="h-full border-l-2 border-black"></div>
    
            <div class="flex flex-col items-center text-center">
                <div class="font-black text-6xl">90</div>
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

        <div class="uppercase text-3xl font-black text-center"> Nos formules</div>
        
        <div class="container min-h-screen flex w-full items-center justify-center">
          <div class="carousel flex  items-center justify-center">

            <div style="transform: rotateY(0deg) translateZ(250px);" class="p-4 space-y-4 flex flex-col item border border-2 border-jaune bg-white absolute w-[250px] h-[200px] text-white rounded-xl">
              <div class="uppercase text-lg text-center font-bold text-black">FORMULE 1</div>
              <div class="text-justify whitespace-normal text-xs text-black">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc libero quam, pretium eget egestas sed, fringilla sit amet mi. Vestibulum et fermentum sapien.
              </div>
              <a href="#" class="bg-jaune text-black text-center rounded mx-auto py-1 px-2 text-xs">
                Voir plus <i class="fa-solid fa-circle-arrow-right ml-1 "></i>
              </a>
            </div>
            
              <div style="transform: rotateY(60deg) translateZ(250px);" class=" p-4 space-y-4 flex flex-col item border border-2 border-jaune absolute bg-white w-[250px] h-[200px] leading-[200px] text-5xl text-center text-white  rounded-xl b">
                <div class="uppercase text-lg text-center font-bold text-black"> FORMULE 2 </div>
                <div class="text-justify whitespace-normal text-xs text-black"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc libero quam, pretium eget egestas sed, fringilla sit amet mi. Vestibulum et fermentum sapien.</div>  
                <a href="#" class="bg-jaune text-black text-center rounded mx-auto py-1 px-2 text-xs">
                  Voir plus <i class="fa-solid fa-circle-arrow-right ml-1 "></i>
                </a>
              </div>
              <div style="transform: rotateY(120deg) translateZ(250px);" class="p-4 space-y-4 flex flex-col item border border-2 border-jaune absolute bg-white w-[250px] h-[200px] leading-[200px] text-5xl text-center text-white rounded-xl c">
                <div class="uppercase text-lg text-center font-bold text-black"> FORMULE 3 </div>
                <div class="text-justify whitespace-normal text-xs text-black "> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc libero quam, pretium eget egestas sed, fringilla sit amet mi. Vestibulum et fermentum sapien.</div>  
                <a href="#" class="bg-jaune text-black text-center rounded mx-auto py-1 px-2 text-xs">
                  Voir plus <i class="fa-solid fa-circle-arrow-right ml-1 "></i>
                </a>
              </div>
              <div style="transform: rotateY(180deg) translateZ(250px);" class="p-4 space-y-4 flex flex-col item border border-2 border-jaune absolute bg-white w-[250px] h-[200px] leading-[200px] text-5xl text-center text-white  rounded-xl d">              
                <div class="uppercase text-lg text-center font-bold text-black"> FORMULE 4 </div>
              <div class="text-justify whitespace-normal text-xs text-black"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc libero quam, pretium eget egestas sed, fringilla sit amet mi. Vestibulum et fermentum sapien.</div>
              <a href="#" class="bg-jaune text-black text-center rounded mx-auto py-1 px-2 text-xs">
                Voir plus <i class="fa-solid fa-circle-arrow-right ml-1 "></i>
              </a>
            </div>
              <div style="transform: rotateY(240deg) translateZ(250px);" class="p-4 space-y-4 flex flex-col item border border-2 border-jaune absolute bg-white w-[250px] h-[200px] leading-[200px] text-5xl text-center text-white  rounded-xl e">              
                <div class="uppercase text-lg text-center font-bold text-black"> Application </div>
              <div class="text-justify whitespace-normal text-xs text-black "> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc libero quam, pretium eget egestas sed, fringilla sit amet mi. Vestibulum et fermentum sapien.</div>
              <a href="#" class="bg-jaune text-black text-center rounded mx-auto py-1 px-2 text-xs">
                Voir plus <i class="fa-solid fa-circle-arrow-right ml-1 "></i>
              </a>
            </div>
          </div>
   

        <div class="next"><i class="fa-solid fa-circle-arrow-right text-4xl"></i></div>
        <div class="prev"><i class="fa-solid fa-circle-arrow-left text-4xl"></i></div>

      </div>
      
        
    </div>
      
        
    
          
        
   
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
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>