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
    <title>Notre histoire</title>
</head>
<body>

    <a href="{{route ('decouvrir-admin')}}" class="hover:underline absolute top-4 left-4"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer la page Nous découvrir
    </a>
    
    <div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Notre histoire </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-about-content')}}">
        @csrf


        <div class="mb-4">
            <label  class="block text-sm font-semibold  mb-2">Description :</label>
            <textarea name="description" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required> </textarea>
        </div>

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



<div class="w-full flex space-x-8 items-center justify-center p-12"> 

    @if ($aboutcontent && $aboutcontent->description)
    <div class="max-w-2xl text-justify">
        {{$aboutcontent->description}}
    </div>
  @endif
            
            
  @if($aboutcontent)
  <a href="{{ route('about-content-edit', $aboutcontent->id) }}" class="font-bold text-center bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">
      Modifier
  </a>
@endif

    
</div>
   

</body>
</html>