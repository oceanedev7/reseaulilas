@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('title', 'Contact')



    @section('content')
    
    <div class="bg-jaune h-56 w-full flex justify-center">
        <div class="font-black text-4xl mt-16"> CONTACTEZ-NOUS </div>
    </div>
    
    <div class="relative h-96 w-full"> 
        <div class="custom-margin absolute top-[-50px] left-0 right-0">
            <div class="bg-white rounded-xl p-4 flex items-center justify-center relative custom-shadow">
                <div class="absolute inset-0 flex items-center justify-center z-0">
                    <div class="h-full border-l-2 border-black"></div>
                </div>
                <div class="flex-1 flex justify-center items-center gap-4 relative z-10">
                    <div class="flex-1 bg-white p-4 ">
                        <div class="flex flex-col space-y-10">
                            @foreach ($contactsView as $contactView)
          
                            <a href="https://www.google.fr/maps/place/BeBOOSTER/@14.6048436,-61.0458183,17z/data=!3m1!4b1!4m6!3m5!1s0x8c6aa15d37fd051d:0x5fead3840118fcbe!8m2!3d14.6048384!4d-61.0432434!16s%2Fg%2F11smk9_zqk?entry=ttu&g_ep=EgoyMDI0MDgyMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="flex space-x-4">
                                <i class="fa-solid fa-location-dot text-2xl mt-3"></i>
                                <div class="max-w-56">
                                   {{$contactView->adresse}}                               
                                </div>
                            </a>
                            <div class="flex space-x-4">
                                <i class="fa-solid fa-phone text-2xl"></i>
                                <div class="">{{$contactView->telephone}}</div>
                            </div>

                            <a href="mailto:adressemail@gmail.com" class="flex space-x-4">
                                <i class="fa-solid fa-envelope text-2xl"></i>
                                <div class="">{{$contactView->email}}</div>
                            </a>@endforeach
                            <div class="flex items-center space-x-4">
                                <a href="https://www.facebook.com/p/R%C3%A9seau-LILAS-100081957576254/" target="_blank" class="text-3xl"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="https://www.instagram.com/reseaulilas/" target="_blank" class="text-3xl"><i class="fa-brands fa-square-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/r%C3%A9seau-l-i-l-a-s-49037421b/?originalSubdomain=mq" target="_blank" class="text-3xl"><i class="fa-brands fa-linkedin"></i></a>
                            </div>
                            <a  href="https://chat.whatsapp.com/LT88YWEQe8UG1UsxWz9je9" target="_blank" class="flex space-x-4">
                                <i class="fa-brands fa-square-whatsapp mt-5 text-3xl"></i>
                                <div class="">Rejoignez notre groupe 
                                    "Entrepreneuses 972" <br> dédié aux entrepreneuses
                                    de Martinique <br> (déjà + 600 membres)</div>
                            </a>
                        </div>
                    </div>
                    <div class="flex-1 p-4">
                        <div class="text-center">LOREM IPSUM</div>
                        <form class="space-y-6" method="POST" action="{{ route('contact-request') }}">
                            @csrf
                            <div class="flex flex-row space-x-4">
                                <input name="nom" class="p-2 rounded-xl border-2 border-jaune focus:ring-0 focus:border-black" placeholder="Nom" required>
                                <input name="prenom" class="p-2 rounded-xl border-2 border-jaune focus:ring-0 focus:border-black" placeholder="Prénom" required>
                            </div>
                            <div class="flex flex-col space-y-6">
                                <input name="email" class="p-2 rounded-xl border-2 border-jaune focus:ring-0 focus:border-black" placeholder="Adresse e-mail" required>
                                <input name="sujet" class="p-2 rounded-xl border-2 border-jaune focus:ring-0 focus:border-black" placeholder="Sujet" required>
                                <textarea name="message" placeholder="Message" rows="4" class="resize-none p-2 rounded-xl border-2 border-jaune focus:ring-0 focus:border-black" required></textarea>
                            </div>
                            <div class="flex justify-end">
                                <button class="font-bold bg-jaune rounded-xl py-1.5 px-4">ENVOYER</button>
                            </div>   
                            @if (session('success'))
                                <div class="alert alert-success w-full text-center font-bold">
                                    {{ session('success') }}
                                </div>
                            @endif                     
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<div class="w-full h-72 flex flex-row justify-center items-center space-x-24 mt-24 mb-8"> 

    @foreach ($adressesView as $adresseView)
        
    <div class="flex items-center justify-center rounded-xl h-32 w-72 custom-shadow overflow-hidden"> 
        <div class="flex items-center justify-center space-x-4">
            <i class="fa-solid fa-location-dot text-2xl mt-4"></i>
            <div class="text-center break-words max-w-40">
                {{$adresseView->adresse_postale}}
            </div>
        </div>
    </div>
    
   @endforeach

</div>


    @endsection
    
</body>
</html>