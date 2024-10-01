@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Découvrez les avantages de devenir partenaire du Réseau L.I.L.A.S. et engagez-vous pour l’inclusion des femmes entrepreneures en Martinique. Profitez d'une visibilité accrue et de réductions fiscales.">
    <title>Nos partenaires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> REMERCIEMENTS </div>
    </div>

    <div class="w-full p-12">

        <div class="relative flex flex-col md:flex-row items-center space-y-8 md:space-y-0 md:space-x-4">

            <div class="h-[550px] w-[480px] flex justify-center items-center"> 
                <img class="h-full w-full rounded-xl object-cover" src="{{ asset('storage/images/nospartenaires.jpg') }}" alt="">
            </div>
        
            <div class="bg-white rounded-xl custom-shadow overflow-hidden p-8 max-w-3xl z-10 mb-4 md:mb-0 flex-1"> 
                <div class="uppercase font-black text-center mb-4 text-xl">Remerciement aux Partenaires</div>
                <div class="text-justify mb-4">
                    @if($descriptionView)
                        {{$descriptionView->description}}
                    @endif              
                </div>
                <div class="flex justify-center">
                    <a href="{{ route('devenir-partenaire') }}" class="hover:underline text-jaune font-bold uppercase text-lg"> 
                        <i class="fa-solid fa-arrow-right"></i>
                        Devenir partenaire
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                </div>
            </div>
        
        </div>
        
        

        <div class="container mx-auto p-4"> 
            <div class="grid grid-cols-2 md:grid-cols-4 gap-x-12 gap-y-12 mt-12 ">
                
                @foreach ($logosView as $logoView)
                    
                
                <div class="flex items-center justify-center p-4 rounded-lg custom-shadow">
                    <img src="{{  Storage::url($logoView->photo)  }}" alt="" class="">
                </div>
        @endforeach
               
                
            </div>
        </div>

    </div>

    @endsection
    
</body>
</html>