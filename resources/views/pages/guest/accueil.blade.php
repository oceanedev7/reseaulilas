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
    
   
    <div class="h-screen w-full pt-40">

    <div class="flex flex-row items-center justify-center space-x-32 ">
 
            <div class="h-96 w-96">
                <img class=" h-96 w-96 rounded-xl object-cover transition-transform duration-300 ease-in-out transform hover:scale-105" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
            </div>
        

        <div class="flex flex-col space-y-12 "> 
            <div class="relative font-black text-lg group text-center">
                <a href="#" class="text-black text-3xl text-center">QUI SOMMES-NOUS ?</a>
            </div>
            <div class="max-w-xl text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non sem condimentum, ullamcorper ante et, 
                efficitur leo. Aenean eget urna fringilla, fringilla ipsum eu, porta erat. Fusce gravida justo ut orci ultrices
                 consectetur. Vivamus lacinia risus non nunc dignissim, ut tristique sapien euismod. Nullam sed mi varius 
                 ipsum blandit mollis. Sed lacinia tempus est in efficitur. Integer aliquam ut eros ac elementum. 
                 Fusce et libero metus. Nulla et metus in nibh finibus sodales.
                 In eget bibendum sapien, sit amet tempor velit. Nulla facilisi. Morbi eu elementum augue.  
            </div>
        </div>

    </div>

    </div> 
       

 
    <div class="flex-grow">
        <div class="w-full h-screen">
            <div class="relative w-full h-3/5">
                <div class="absolute top-10 left-1/2 -translate-x-1/2 font-black text-3xl">
                    RECONTREZ L'ÉQUIPE
                </div>
            </div>

            <div class="bg-jaune w-full relative h-2/5">
                <div class="flex flex-col items-center absolute bg-white h-64 w-64 rounded-xl left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-4 custom-shadow">
                    <img class="h-40 w-64 rounded-xl object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                    <div class="flex flex-col items-center justify-center mt-4">
                        <div>Marie DUPOND</div>
                        <div class="font-bold">Directrice Commerciale</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="bg-gray-700 flex items-center justify-center p-60 relative">

        <div class="absolute top-4 left-1/2 -translate-x-1/2 font-black text-3xl ">
            NOS MISSIONS
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
    </div>
    

    <div class="h-60 w-full bg-blue-900 p-8">
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