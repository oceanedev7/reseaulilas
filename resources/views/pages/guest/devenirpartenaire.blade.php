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

    <div class="flex space-x-2 font-bold text-lg relative top-10 ml-6">
        <div> Nous rejoindre </div> 
        <div> / </div> 
        <a href="{{route ('devenir-benevole')}}"> Devenir partenaire </a>
    </div>

    <div class="w-full h-72 flex justify-center items-center">
        <div class="max-w-5xl">
            <div class="text-justify">
                {{$partnerView->description}}           
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

    <div class="max-w-4xl ">
        <div class="text-justify flex flex-row justify-center">
            Pour devenir partenaire et collaborer avec nous, merci de bien vouloir remplir ce formulaire afin que nous puissions explorer ensemble les opportunités de partenariat.        </div>
    </div>


<div class="mt-10 w-full">

    <form class="flex flex-col items-center" method="POST" action="{{route ('partner-request')}}">
        @csrf
        <div class="flex flex-col space-y-4 w-full max-w-4xl">
            <div class="flex flex-row space-x-4">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" name="nom" placeholder="Nom" required>
                <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black " name="prenom" placeholder="Prénom" required>
            </div>
            
            <div class="flex flex-row space-x-4">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black " name="raison_sociale" placeholder="Raison sociale" required>
                <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" name="fonction" placeholder="Fonction" required>
            </div>
            
            <div class="flex flex-row space-x-4">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black " name="email" placeholder="Adresse e-mail" required>
                <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black " name="telephone" placeholder="Numéro de téléphone" required>
            </div>
    
            <input class="p-2 rounded-xl border-2 border-jaune w-full focus:ring-0 focus:border-black " name="adresse_postale" placeholder="Adresse postale" required>
    
            <div class="flex flex-row space-x-4">
                <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" name="ville" placeholder="Ville" required>
                <input class="p-2 rounded-xl border-2 border-jaune flex-1 focus:ring-0 focus:border-black" name="code_postal" placeholder="Code postal" required>
            </div>
    
            <select class="p-2 rounded-xl border-2 border-jaune w-full focus:ring-0 focus:border-black" name="type" required>
                <option disabled selected>Veuillez sélectionner un type de partenariat</option>
                <option value="Sponsoring">Sponsoring</option>
                <option value="Mécénat">Mécénat</option>
                <option value="Collaboration">Collaboration</option>
                <option value="Parrainage">Parrainage</option>
            </select>
    
            <textarea class="p-2 rounded-xl border-2 border-jaune resize-none w-full focus:ring-0 focus:border-black " rows="5" name="message" placeholder="Message" required></textarea>
        </div>
        <div class="flex justify-end w-full max-w-4xl mt-4">
            <button class="font-bold bg-jaune rounded-xl py-1.5 px-4">ENVOYER</button>
        </div>
        @if (session('success'))
            <div class="alert alert-success w-full text-center font-bold">
                {{ session('success') }}
            </div>
        @endif  
    </form>
    

</div>



</div>
    

    @endsection
    
</body>
</html>