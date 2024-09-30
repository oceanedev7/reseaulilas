@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez le Réseau L.I.L.A.S. pour toute question sur nos programmes d'accompagnement des femmes entrepreneures en Martinique. Rejoignez-nous ou collaborez pour soutenir l’inclusion sociale et économique.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Réseau L.I.L.A.S</title>
</head>
<body>

    @section('content')
    
    <div class="bg-jaune h-56 w-full flex justify-center">
        <h1 class="font-black text-4xl mt-16"> CONTACTEZ-NOUS </h1>
    </div>
   
    <div class="relative w-full"> 
        <div class="custom-margin absolute top-[-50px] left-0 right-0 bg-white rounded-xl p-6 flex flex-col md:flex-row items-center justify-between relative custom-shadow w-full max-w-screen-lg mx-auto px-6">
            <div class="flex-1 bg-white p-4 space-y-4">
                <h1 class="text-center uppercase font-bold text-xl">Contacter le Réseau L.I.LA.S.</h1>
                <p class="text-justify leading-7 mr-2">
                    Vous souhaitez en savoir plus sur nos actions ou rejoindre notre réseau de femmes entrepreneures en Martinique ? 
                    Contactez-nous pour toute information ou pour discuter de nos programmes, événements et opportunités de collaboration.
                    Nous sommes disponibles pour répondre à toutes vos questions et vous accompagner dans votre parcours entrepreneurial.
                </p>
            </div>
            
            <div class="flex-1 p-4">
                <div class="flex flex-col space-y-6 ml-24">
                    @foreach ($contactsView as $contactView)
                        <a href="https://www.google.fr/maps/place/BeBOOSTER/@14.6048436,-61.0458183,17z/data=!3m1!4b1!4m6!3m5!1s0x8c6aa15d37fd051d:0x5fead3840118fcbe!8m2!3d14.6048384!4d-61.0432434!16s%2Fg%2F11smk9_zqk?entry=ttu&g_ep=EgoyMDI0MDgyMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="flex space-x-4">
                            <i class="fa-solid fa-location-dot text-2xl mt-3"></i>
                            <span class="max-w-56">{{ $contactView->adresse }}</span>
                        </a>
                        <div class="flex items-center space-x-4">
                            <i class="fa-solid fa-phone text-2xl"></i>
                            <span>{{ $contactView->telephone }}</span>
                        </div>
        
                        <a href="mailto:adressemail@gmail.com" class="flex items-center space-x-4">
                            <i class="fa-solid fa-envelope text-2xl"></i>
                            <span>{{ $contactView->email }}</span>
                        </a>
                    @endforeach
        
                    <div class="flex items-center space-x-4">
                        <a href="https://www.facebook.com/p/R%C3%A9seau-LILAS-100081957576254/" target="_blank" class="text-3xl"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.instagram.com/reseaulilas/" target="_blank" class="text-3xl"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/r%C3%A9seau-l-i-l-a-s-49037421b/?originalSubdomain=mq" target="_blank" class="text-3xl"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://www.youtube.com/channel/UClM4hehfPA9F0PmbBL5znqQ" target="_blank" class="text-3xl"><i class="fa-brands fa-youtube"></i></a>
                    </div>
        
                    <a href="https://chat.whatsapp.com/LT88YWEQe8UG1UsxWz9je9" target="_blank" class="flex items-center space-x-4">
                        <i class="fa-brands fa-square-whatsapp mt-5 text-3xl"></i>
                        <span>
                            Rejoignez notre groupe "Entrepreneuses 972" <br> dédié aux entrepreneuses
                            de Martinique <br> (déjà + 600 membres)
                        </span>
                    </a>
                </div>
            </div>
        </div>
        
        
        
    
        <div class="w-full h-auto flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-24 mb-8 px-4 md:px-0"> 
            @foreach ($adressesView as $adresseView)
                <div class="flex items-center justify-center rounded-xl h-32 w-72 custom-shadow overflow-hidden mx-4"> 
                    <div class="flex items-center justify-center space-x-4 p-4">
                        <i class="fa-solid fa-location-dot text-2xl mt-4"></i>
                        <div class="text-center break-words w-full">
                            <span class="block">{{ $adresseView->adresse_postale }}</span>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </div>
        
    </div>
    
    
    
    @endsection
    
</body>
</html>