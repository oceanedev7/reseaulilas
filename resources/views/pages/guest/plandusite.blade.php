<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plan du site</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-6"> 
        
        <a href="{{route ('accueil')}}" class="font-bold hover:underline"> Revenir à la page d'accueil </a>
        <h1 class="text-4xl font-bold text-center my-8">PLAN DU SITE</h1>

     

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4 text-jaune">Pages principales</h2>
                <ul class="list-disc list-inside ">
                    <li><a href="{{route('accueil')}}" class= "hover:underline">Accueil</a></li>
                    <li><a href="{{route('nous-decouvrir')}}" class= "hover:underline">Nous découvrir</a></li>
                    <li><a class=" hover:underline">Nous rejoindre</a></li>
                    <li><a class= "hover:underline">Nos actions</a></li>
                    <li><a href="{{route('nospartenaires')}}" class= "hover:underline">Nos partenaires</a></li>
                    <li><a href="{{route('contact')}}" class= "hover:underline">Contact</a></li>
                </ul>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4 text-jaune">Catégories</h2>
                <ul class="list-disc list-inside">
                    <li><a href="{{route('agenda')}}" class=" hover:underline">Notre agenda</a></li>
                    <li><a href="{{route('actualites')}}" class="hover:underline">Nos actualités</a></li>
                    <li><a href="{{route('devenir-adherente')}}" class=" hover:underline">Devenir adhérente</a></li>
                    <li><a href="{{route('devenir-partenaire')}}" class=" hover:underline">Devenir partenaire</a></li>
                    <li><a href="{{route('devenir-benevole')}}" class=" hover:underline">Devenir bénévole</a></li>
                    <li><a href="{{route('recrutement')}}" class=" hover:underline">Recrutement</a></li>
                   
                </ul>
            </div>


        </div>

        <div class="text-center mt-12">
            <a href="{{route ('contact')}}" class="text-lg font-semibold hover:underline">Vous ne trouvez pas ce que vous cherchez ? Contactez-nous !</a>
        </div>
    </div>

</body>
</html>
