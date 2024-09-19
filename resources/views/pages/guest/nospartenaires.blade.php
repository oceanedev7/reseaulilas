@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Nos partenaires')

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> REMERCIEMENTS </div>
    </div>

    <div class="w-full p-12">

          <div class="relative flex items-center">

            <div class="bg-white rounded-xl custom-shadow overflow-hidden p-8 max-w-3xl z-10 absolute transform translate-x-1/2">
                <div class="uppercase font-black text-center mb-4 text-xl">LOREM IPSUM</div>
                <div class="text-justify">
                    {{$descriptionView->description}}              
                </div>
            </div>

            <div class="h-[550px] w-[480px] flex justify-center">
                <img class="h-full w-full  rounded-xl object-cover" src="{{ asset('storage/images/nospartenaires.jpg') }}" alt="">
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