@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Devenir adhérente</title>
    <meta name="description" content="Devenez adhérente au Réseau L.I.L.A.S. et bénéficiez d'un accompagnement. Rejoignez une communauté bienveillante et professionnelle, pour développer votre activité tout en préservant votre équilibre de vie personnelle.">

</head>
<body>

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <h1 class="font-black text-4xl"> DEVENIR ADHÉRENTE </h1>
    </div>


    <div class="w-full p-10">

        <div class="flex space-x-2 font-bold text-lg">
            <div> Nous rejoindre </div> 
            <div> / </div> 
            <a href="{{route ('devenir-adherente')}}"> Devenir adhérente </a>
        </div>

<div class="flex flex-row items-center justify-center space-x-32 mt-8 mb-12">

       <div class="flex flex-col justify-center items-center space-y-6 ">
    <div class="font-black text-2xl text-center"> ADHÉRER EN LIGNE </div>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 72" stroke="currentColor" class="w-6 h-18">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v64m0 0l6-6m-6 6l-6-6" />
    </svg>
    <a href="https://www.helloasso.com/associations/lilas-les-independantes-libres-alignees-et-solidai/adhesions/adhesion-annuelle-au-reseau-lilas-2025" target="_blank" class="bg-jaune py-4 px-6 rounded-xl font-black text-lg"> JE VEUX DEVENIR ADHÉRENTE</a>
    </div>

    </div> 
        <div class="text-2xl font-bold text-center mt-8"> DÉCOUVREZ NOS FORMULES </div>
        
        <div class="flex flex-wrap justify-center md:space-x-12 space-y-6 md:space-y-0 mt-20">
            @foreach ($formulesView as $formule)
            <a href="{{ route('accueil-formule-details', $formule->id) }}" class="flex flex-col items-center space-y-4 w-full sm:w-60 md:w-48 lg:w-60">
              
                <div class="flex justify-center">
                    <img class="h-60 w-60 rounded-xl object-cover transition-transform duration-300 ease-in-out transform hover:scale-105" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                </div>
        
                <div class="flex flex-col">
                    <div class="text-center font-black uppercase"> {{$formule->titre}} </div>
                </div>
            </a>
            @endforeach
        </div>
        
        
    @endsection
</body>
</html>