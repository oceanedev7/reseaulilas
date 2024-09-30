@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Agenda')

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> AGENDA </div>
    </div>

    <div class="w-full p-12">

        <div class="flex space-x-2 font-bold text-lg">
            <div> Nos actions </div> 
            <div> / </div> 
            <a href="{{route ('agenda')}}"> Agenda </a>
            </div>

        <div class="font-black text-xl mt-8">FILTRER LES RÉSULTATS</div>

        <div class="flex space-x-12 mt-8 items-center">
        <form action="{{ route('filtrer') }}" method="GET" > 
            <input name="date" placeholder="Date" class="bg-gray-300 border-none rounded-lg placeholder-gray-700" type="date">
            <button class="bg-jaune font-bold text-center rounded px-3 py-2 text-sm">FILTRER</button>
        </form>
            <a class="bg-jaune font-bold text-center rounded px-3 py-2 text-sm" href="{{route('agenda')}}"> Voir tous les évènements </a>
        </div>
        
       
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-16 mt-16 mx-auto"> 
            @foreach ($eventsAgendaView as $eventAgendaView)
                <a href="{{route('evenement-details', $eventAgendaView->id )}}" class="mx-auto bg-white max-w-xs w-full rounded-xl custom-shadow overflow-hidden relative"> 
                    <div class="relative rounded-lg overflow-hidden">
                        <img class="w-full h-40 object-cover" src="{{ Storage::url($eventAgendaView->photo) }}" alt="">
                        <div class="absolute top-0 left-0 right-0 h-14 z-10 flex items-center justify-center">
                            <div class="absolute inset-0 bg-jaune opacity-70 z-0"></div>
                            <div class="font-bold text-xl z-10 relative">{{ \Carbon\Carbon::parse($eventAgendaView->date)->format('d/m/Y') }}</div>
                        </div>
                    </div>
                  
                    <div class="absolute left-6 transform -translate-y-1/2 bg-jaune max-w-full rounded-lg p-1 px-3 z-20 whitespace-nowrap overflow-x-auto" style="top: 160px;">
                        <span class="font-bold">{{$eventAgendaView->categorie}}</span>
                    </div>  
                    
                    <div class="uppercase p-10 font-black text-center overflow-hidden whitespace-normal">
                        {{$eventAgendaView->titre}}
                    </div>
                </a>
            @endforeach
        </div>
        
   
    </div>

    <div>
        {{ $eventsAgendaView->links('vendor.pagination.tailwind-page') }}
    </div>

    @endsection
    
</body>
</html>