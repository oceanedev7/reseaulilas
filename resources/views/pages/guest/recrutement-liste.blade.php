@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos offres d'emploi</title>

</head>
<body>

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <h1 class="font-black text-4xl"> NOS OFFRES D'EMPLOI </h1>
    </div>

    <div class="flex space-x-2 font-bold text-lg relative top-8 ml-6">
        <div> Nous rejoindre </div> 
        <div> / </div> 
        <a href="{{route ('recrutement')}}"> Recrutement </a>
    </div>

    <div class="w-full p-12 mt-6"> 
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-12">  
            @foreach ($emploisView as $emploiView)
                <div class="h-80 custom-shadow rounded-xl p-4 box-border overflow-hidden whitespace-normal p-8">
                    <div class="space-y-2.5">
                        <div class="flex space-x-8">
                            <div class="uppercase truncate text-xl font-black">{{$emploiView->titre}}</div>
                            <div class="uppercase truncate font-semibold mt-0.5">{{$emploiView->type_contrat}}</div>
                        </div>
                        
                        <div class="truncate italic">Fort-de-France</div>
                        <div class="bg-[#f9e596] rounded-xl py-1.5 px-2 max-w-32 text-center whitespace-normal font-bold">{{$emploiView->salaire}}€</div>
                        
                        <div class="overflow-hidden text-ellipsis line-clamp-4 whitespace-normal">
                            {{$emploiView->description}}
                        </div>
                    </div>
                    <div class="flex justify-end">
                        <a href="{{route('recrutement-details', $emploiView->id)}}" class="font-bold bg-jaune rounded-xl py-1.5 px-4 mt-4">Voir l'offre</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    



    @endsection
    
</body>
</html>