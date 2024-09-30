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
    <title>Les informations de contact</title>
</head>
<body>

    <a href="{{route ('contact-admin')}}" class="hover:underline absolute top-4 left-4"> 
        <i class="fa-solid fa-arrow-left"></i>
         Revenir à la page Gérer la page Contact
    </a>
    
    <div class="bg-jaune w-full p-12 space-y-12 flex flex-col items-center"> 
<div class="text-center font-black uppercase text-3xl"> Les informations de contact </div>
<div class="bg-white custom-shadow p-8 rounded-lg shadow-lg w-full max-w-4xl">

    <form method="POST" action="{{route ('new-contact')}}">
        @csrf

        <div class="mb-4">
        <label for="Horaires" class="block text-sm font-semibold  mb-2">Jours et Horaires :</label>
        <input name="horaire" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

        <div class="mb-4">
            <label for="Adresse postale" class="block text-sm font-semibold  mb-2">Adresse postale principale :</label>
            <input name="adresse" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

        <div class="mb-4">
            <label for="Adresse e-mail" class="block text-sm font-semibold  mb-2">Adresse e-mail :</label>
            <input name="email" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune" required>
        </div>

        <div class="mb-4">
            <label for="Numéro de téléphone" class="block text-sm font-semibold  mb-2">Numéro de téléphone :</label>
            <input name="telephone" class="w-full px-3 py-2 border border-black rounded-md shadow-sm focus:outline-none focus:ring-jaune focus:border-jaune">
        </div>

        @if ($errors->has('max_elements'))
        <div class="text-red-600 text-sm mt-1 mb-4">
            {{ $errors->first('max_elements') }}
        </div>
    @endif
    
        <div class="mb-4">
            <button  class="w-full mt-4 py-2 bg-jaune font-bold rounded-xl shadow-sm hover:bg-yellow-300">Créer les informations de contact</button>
        </div>
    </form>
</div>
</div>



<div class="w-full h-72 flex flex-col items-center justify-center p-12"> 
    @foreach ($contacts as $contact)
        
    <div class="mb-4 flex flex-start space-x-2">
        <label class="block font-semibold  mb-2">Horaires :</label>
        <div>{{$contact->horaire}}</div>   
     </div>

     <div class="mb-4 flex space-x-2">
        <label class="block font-semibold  mb-2">Adresse postale principale :</label>
        <div>{{$contact->adresse}}</div>  
     </div>

     <div class="mb-4 flex space-x-2">
        <label class="block font-semibold  mb-2">Email :</label>
        <div>{{$contact->email}}</div> 
     </div>
       
     <div class="mb-4 flex space-x-2">
        <label class="block font-semibold  mb-2">Numéro de téléphone :</label>
        <div>{{$contact->telephone}}</div>
     </div>
    
            <div class="flex justify-start">
                <a href="{{route ('contact-edit', $contact->id)}}" class="font-bold bg-green-600 text-white rounded-xl py-1.5 px-4 mt-4">Modifier</a>
            </div>
      
    
   @endforeach
</div>
   

</body>
</html>