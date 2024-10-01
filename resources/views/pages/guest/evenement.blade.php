@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Évènement</title>

</head>
<body>

    @section('content')

    
    <div class="relative h-80 w-full">
        <img class="h-80 w-full object-cover" src="{{ Storage::url($eventAgendaView->photo) }}">
    </div>

    <div class="w-full p-12 ">

        <a href="{{route ('agenda')}}" class="items-center p-3 bg-jaune rounded-xl space-x-2">
            <i class="fa-solid fa-calendar-alt text-xl"></i> 
            <span class="font-bold">Voir l'agenda</span>
        </a>
        

        <div class="container mx-auto space-y-12">

        <h1 class="font-black uppercase text-3xl text-center mt-10"> - {{$eventAgendaView->titre}} -  </h1>

        <div class="flex font-bold flex-row justify-center text-xl space-x-24"> 
            <div>Lieu : {{$eventAgendaView->lieu}} </div>
        <div class="flex space-x-2">
            <div> Le {{ \Carbon\Carbon::parse($eventAgendaView->date)->translatedFormat('d F Y') }}</div>
            
            @if ($eventAgendaView->heure_fin)
            <div>de {{ \Carbon\Carbon::parse($eventAgendaView->heure_debut)->format('H:i') }} à {{ \Carbon\Carbon::parse($eventAgendaView->heure_fin)->format('H:i') }}</div>
        @else
            <div>à {{ \Carbon\Carbon::parse($eventAgendaView->heure_debut)->format('H:i') }}</div>
        @endif
        
             


    </div>
        </div>

        <div class="text-justify mt-10">
            {{$eventAgendaView->description}}        
        </div>
        </div>
    </div>
    @endsection
    
</body>
</html>