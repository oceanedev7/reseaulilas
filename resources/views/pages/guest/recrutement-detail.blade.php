@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @section('title', 'Recrutement')

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> NOS OFFRES D'EMPLOI </div>
    </div>

    <div class="flex space-x-2 font-bold text-lg relative top-8 ml-6">
        <div> Nous rejoindre </div> 
        <div> / </div> 
        <a href="{{route ('recrutement')}}"> Recrutement </a>
        <div> / </div> 
        <a href="#"> Assistante commerciale</a>
    </div>

    <div class="p-12 mt-6">

        <div> 
            <div class="flex items-center space-x-12">         
                <img class="rounded-xl h-48 w-48 object-cover" src="{{  Storage::url($emploiView->photo)  }}" alt="">
                <div class="flex flex-col space-y-2"> 
                    <div class="uppercase font-black text-2xl whitespace-normal"> {{$emploiView->titre}}</div>
                    <div class="uppercase font-bold text-lg italic">{{$emploiView->lieu}} </div>
                    <div class="uppercase font-semibold text-lg">{{$emploiView->type_contrat}} </div>
                </div>
            
            </div>
        </div>

        <div class="mt-12"> 
            
            <div class="space-y-4">
            <div class="uppercase font-black text-xl">  Description :  </div>
            <div class="text-justify">
                {{$emploiView->description}}            
            </div>

            <div class="space-y-4 mt-8">
                <div class="uppercase font-black text-xl">  Compétences :  </div>
                <div class="flex flex-col">
                <div> {{$emploiView->qualification}}   </div>
    
                </div>
            </div>

            <div class="space-y-4 mt-8">
                <div class="uppercase font-black text-xl">  Missions :  </div>
                <div class="flex flex-col">
                <div> -{{$emploiView->mission}} </div>
            
                </div>
            </div>

<div class="space-y-4 mt-8">
                <div class="uppercase font-black text-xl">  Salaire :  </div>
                <div class="">
                    <div class="bg-[#f9e596] rounded-xl py-1.5 px-2 max-w-32 text-center whitespace-normal font-bold">{{$emploiView->salaire}}€</div>
                </div>
</div>

<div class="space-y-4 mt-8">
                <div class="uppercase font-black text-xl">  Contactez-nous pour postuler :  </div>
                <div class="space-y-2">
                <div class="flex space-x-3"> 
                  <div>  <i class="fa-solid fa-at text-lg"></i> </div>
                <div class="font-semibold text-lg"> {{$emploiView->email}} </div>
                </div>
                <div class="flex space-x-3"> 
                    <div>  <i class="fa-solid fa-phone text-lg"></i> </div>
                  <div class="font-semibold text-lg"> {{$emploiView->telephone}}</div>
                  </div>
                </div>
</div>
                

        </div>

    </div>

    @endsection

</body>
</html>