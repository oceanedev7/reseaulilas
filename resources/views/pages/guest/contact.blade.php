@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Contact')



    @section('content')
    
    <div class="bg-jaune h-56 w-full flex justify-center">
        <div class="font-black text-4xl mt-16"> CONTACTEZ-NOUS </div>
    </div>
    
    <div class="relative h-96 w-full"> 
        <div class="custom-margin absolute top-[-50px] left-0 right-0">
            <div class="bg-white rounded-xl p-4 flex items-center justify-center relative custom-shadow">
                <div class="absolute inset-0 flex items-center justify-center z-0">
                    <div class="h-full border-l-2 border-black"></div>
                </div>
                <div class="flex-1 flex justify-center items-center gap-4 relative z-10">
                    <div class="flex-1 bg-white p-4 ">
                        <div class="flex flex-col space-y-8">
                            <div class="flex space-x-4">
                                <i class="fa-solid fa-location-dot text-2xl mt-5"></i>
                                <div class="">
                                    Centre d'Affaires BE BOOSTER, <br> 12 Rue des Arts et Métiers, <br> Fort-de-France 97200, Martinique
                                </div>
                            </div>
                            <div class="flex space-x-4">
                                <i class="fa-solid fa-phone text-2xl"></i>
                                <div class="">0696 40 21 90</div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <a href="#" class="text-3xl"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="#" class="text-3xl"><i class="fa-brands fa-square-instagram"></i></a>
                                <a href="#" class="text-3xl"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                            <div class="flex space-x-4">
                                <a href="#" class="text-3xl"><i class="fa-brands fa-square-whatsapp mt-5"></i></a>
                                <div class="">Rejoignez notre groupe 
                                    "Entrepreneuses 972" <br> dédié aux entrepreneuses
                                    de Martinique <br> (déjà + 600 membres)</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 p-4">
                        <div class="text-center">LOREM IPSUM</div>
                        <form class="space-y-6">
                            @csrf
                            <div class="flex flex-row space-x-4">
                                <input class="p-2 rounded-xl border-2 border-jaune" placeholder="Nom">
                                <input class="p-2 rounded-xl border-2 border-jaune" placeholder="Prénom">
                            </div>
                            <div class="flex flex-col space-y-6">
                                <input class="p-2 rounded-xl border-2 border-jaune" placeholder="Sujet">
                                <textarea placeholder="Message" rows="4"   class="resize-none p-2 rounded-xl border-2 border-jaune"></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button class="font-bold bg-jaune rounded-xl py-1.5 px-4">ENVOYER</button>
                            </div>                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div class="w-full h-72 flex flex-row justify-center items-center space-x-24"> 

    <div class="flex items-center justify-center rounded-xl h-32 w-72 custom-shadow overflow-hidden"> 
        <div class="flex items-center justify-center space-x-4">
            <i class="fa-solid fa-location-dot text-2xl mt-4"></i>
            <div class="text-center">
                Centre d'Affaires BE BOOSTER, <br> 12 Rue des Arts et Métiers, <br> Fort-de-France 97200
            </div>
        </div>
    </div>

<div class="flex items-center justify-center rounded-xl h-32 w-72 custom-shadow overflow-hidden"> 
    <div class="flex items-center justify-center space-x-4">
        <i class="fa-solid fa-location-dot text-2xl mt-4"></i>
        <div class="text-center">
            Centre d'Affaires BE BOOSTER, <br> 12 Rue des Arts et Métiers, <br> Fort-de-France 97200
        </div>
    </div>
</div>


<div class="flex items-center justify-center rounded-xl h-32 w-72 custom-shadow overflow-hidden"> 
    <div class="flex items-center justify-center space-x-4">
        <i class="fa-solid fa-location-dot text-2xl mt-4"></i>
        <div class="text-center">
            Centre d'Affaires BE BOOSTER, <br> 12 Rue des Arts et Métiers, <br> Fort-de-France 97200
        </div>
    </div>
</div>

</div>

<div class="w-full h-80 bg-red-900 mt-10">



</div>


    @endsection
    
</body>
</html>