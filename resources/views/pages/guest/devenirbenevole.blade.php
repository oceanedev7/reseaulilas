@extends("layouts.main")
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

    @section('title', 'Devenir bénévole')

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> DEVENIR BÉNÉVOLE </div>
    </div>

    <div class="w-full h-72 flex justify-center items-center">
        <div class="max-w-5xl">
            <div class="text-justify">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non sem condimentum, ullamcorper ante et, efficitur leo. Aenean eget urna fringilla, fringilla ipsum eu, porta erat. Fusce gravida justo ut orci ultrices consectetur. 
                Vivamus lacinia risus non nunc dignissim, ut tristique sapien euismod. Nullam sed mi varius ipsum blandit mollis. 
                Sed lacinia tempus est in efficitur. Integer aliquam ut eros ac elementum. Fusce et libero metus. Nulla et metus in nibh finibus sodales. In eget bibendum sapien, sit amet tempor velit. Nulla facilisi. Morbi eu elementum augue. 
                Sed lacinia tempus est in efficitur. Integer aliquam ut eros ac elementum. Fusce et libero metus. Nulla et metus in nibh finibus sodales. In eget bibendum sapien, sit amet tempor velit. Nulla facilisi. Morbi eu elementum augue. 
            </div>
        </div>
    </div>

    <div class="bg-jaune w-full h-52 flex flex-row justify-center items-center space-x-24">
        <div class="flex flex-row justify-center items-center space-x-24 mt-11"> 
        <div class="relative flex w-64 flex-col rounded-xl bg-white shadow-xl">
            <div class="relative mx-auto -mt-12 h-24 w-24 overflow-hidden rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-hand-holding-heart text-4xl"></i>
            </div>
            
            <div class="p-4">
              <h5 class="text-center text-lg font-semibold">
               LOREM IPSUM
              </h5>
            </div>
        </div>
        <div class="relative flex w-64 flex-col rounded-xl bg-white shadow-xl">
            <div class="relative mx-auto -mt-12 h-24 w-24 overflow-hidden rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-hand-holding-heart text-4xl"></i>
            </div>
            <div class="p-4">
              <h5 class="text-center text-lg font-semibold">
                LOREM IPSUM
              </h5>
            </div>
        </div>
        <div class="relative flex w-64 flex-col rounded-xl bg-white shadow-xl">
            <div class="relative mx-auto -mt-12 h-24 w-24 overflow-hidden rounded-full bg-white flex items-center justify-center">
                <i class="fa-solid fa-hand-holding-heart text-4xl"></i>
            </div>
            <div class="p-4">
              <h5 class="text-center text-lg font-semibold">
                LOREM IPSUM
              </h5>
            </div>
        </div>
        </div>
    </div>

    <div class="w-full p-12 flex flex-col justify-center items-center">

        <div class="max-w-5xl ">
            <div class="text-justify flex flex-row justify-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non sem condimentum, ullamcorper ante et, efficitur leo. Aenean eget urna fringilla, fringilla ipsum eu, porta erat. Fusce gravida justo ut orci ultrices consectetur. 
            </div>
        </div>
    
    
    <div class="mt-16 w-full">
    
        <form class="flex flex-col items-center">
            @csrf
            <div class="flex flex-col space-y-4 w-full max-w-4xl">
                <div class="flex flex-row space-x-4">
                    <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" placeholder="Nom">
                    <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" placeholder="Prénom">
                </div>
            
                
                <div class="flex flex-row space-x-4">
                    <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" placeholder="Adresse e-mail">
                    <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" placeholder="Numéro de téléphone">
                </div>
        
                <input class="p-2 rounded-xl border-2 border-jaune w-full focus:ring-0 focus:border-black" placeholder="Adresse postale">
        
                <div class="flex flex-row space-x-4">
                    <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" placeholder="Ville">
                    <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" placeholder="Code postal">
                </div>
    
                <textarea class="p-2 rounded-xl border-2 border-jaune resize-none w-full text-gray-500 focus:ring-0 focus:border-black" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="flex justify-end w-full max-w-4xl mt-4">
                <button class="font-bold bg-jaune rounded-xl py-1.5 px-4">ENVOYER</button>
            </div>
        </form>
        
    
    </div>
    
    
    
    </div>

   
    

      

    @endsection

</body>
</html>