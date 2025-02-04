<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>Remerciements - Partenaires</title>
</head>
<body>

    <a href="{{route ('partenaires-admin')}}" class="hover:underline absolute top-4 left-4"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer la page Nos partenaires
    </a>
    
    <div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Texte de remerciement - Partenaires </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-description')}}">
        @csrf

            <label for="Description" class="block text-sm font-semibold  mb-2">Description :</label>
            <textarea  name="description" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required> </textarea>

            @error('description')
            <div class="text-red-600 text-sm mt-1 mb-4">{{ $message }}</div>  
        @enderror

            @if ($errors->has('max_elements'))
            <div class="text-red-600 text-sm mt-1 mb-4">
                {{ $errors->first('max_elements') }}
            </div>
        @endif
    
        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer une description</button>
        </div>
    </form>
</div>
</div>



<div class="w-full p-12"> 
   
        
        <div class="custom-shadow w-full rounded-xl p-12 text-justify">
            @if($description)
                    {{$description->description}}

                @endif  
            </div>
    
            <div class="flex justify-start mt-4">
                @if($description)
                    <a href="{{ route('partner-edit', $description->id) }}" class="font-bold bg-green-600 text-white w-full text-center rounded-xl py-1.5 px-4 mt-4">Modifier</a>
                @endif
            </div>
            
        </div>
    
 
</div>
   

</body>
</html>