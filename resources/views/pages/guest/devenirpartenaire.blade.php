@extends("layouts.main")
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Devenir partenaire')

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> DEVENIR PARTENAIRE </div>
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

        <div class="flex flex-col justify-center items-center">
            <i class="fa-solid fa-user-plus text-4xl"></i>
            <div class="font-black "> LOREM IPSUM </div>
            <div class="text-center"> Lorem ipsum dolor sit amet, <br> non sem condimentum.</div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <i class="fa-solid fa-user-plus text-4xl"></i>
            <div class="font-black "> LOREM IPSUM </div>
            <div class="text-center"> Lorem ipsum dolor sit amet, <br> non sem condimentum.</div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <i class="fa-solid fa-user-plus text-4xl"></i>
            <div class="font-black"> LOREM IPSUM </div>
            <div class="text-center"> Lorem ipsum dolor sit amet, <br> non sem condimentum.</div>
        </div>
        <div class="flex flex-col justify-center items-center">
            <i class="fa-solid fa-user-plus text-4xl"></i>
            <div class="font-black "> LOREM IPSUM </div>
            <div class="text-center"> Lorem ipsum dolor sit amet, <br> non sem condimentum.</div>
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
        <div class="flex flex-col space-y-4 w-full max-w-4xl">
            <div class="flex flex-row space-x-4">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1" placeholder="Nom">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1" placeholder="Prénom">
            </div>
            
            <div class="flex flex-row space-x-4">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1" placeholder="Raison sociale">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1" placeholder="Fonction">
            </div>
            
            <div class="flex flex-row space-x-4">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1" placeholder="Adresse e-mail">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1" placeholder="Numéro de téléphone">
            </div>
    
            <input class="p-2 rounded-xl border-2 border-jaune w-full" placeholder="Adresse postale">
    
            <div class="flex flex-row space-x-4">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1" placeholder="Ville">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1" placeholder="Code postal">
            </div>
    
            <select class="p-2 rounded-xl border-2 border-jaune w-full">
                <option value="" disabled selected>Veuillez sélectionner un type de partenariat</option>
                <option value="">Sponsoring</option>
                <option value="">Mécénat</option>
                <option value="">Collaboration</option>
                <option value="">Parrainage</option>
            </select>
    
            <textarea class="p-2 rounded-xl border-2 border-jaune resize-none w-full text-gray-500" rows="5" placeholder="Message"></textarea>
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