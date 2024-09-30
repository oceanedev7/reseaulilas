@extends("layouts.main")
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Soutenez le Réseau L.I.L.A.S</title>
    <meta name="description" content="Découvrez les avantages de devenir partenaire du Réseau L.I.L.A.S. et engagez-vous pour l’inclusion des femmes entrepreneures en Martinique. Profitez d'une visibilité accrue et de réductions fiscales.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <h1 class="font-black text-4xl"> DEVENIR PARTENAIRE </h1>
    </div>

    <div class="flex space-x-2 font-bold text-lg relative top-10 ml-6">
        <div> Nous rejoindre </div> 
        <div> / </div> 
        <a href="{{route ('devenir-benevole')}}"> Devenir partenaire </a>
    </div>

    <div class="w-full p-12">

        <h2 class="text-jaune font-black text-center uppercase text-3xl mt-10 mb-6">
            6 Avantages à soutenir le Réseau L.I.L.A.S.
        </h2>
    
        <div class="text-justify">
            Soutenir le Réseau L.I.L.A.S. est un acte engagé qui bénéficie à la fois à l'économie locale et au bien-être social. Grâce à nos actions directes auprès de centaines de femmes et à nos campagnes de communication sur divers médias, réseaux sociaux et relais d'influence, nous vous offrons plusieurs avantages pour valoriser votre soutien.
        </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">Engagement social</h3>
        <div class="text-justify">
            Contribuez à une cause noble en soutenant des femmes entrepreneures et en favorisant l'inclusion sociale et l'autonomie financière.
        </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">Soutien direct à l'économie locale</h3>
        <div class="text-justify">
            En aidant les entrepreneuses martiniquaises, vous soutenez le développement économique local et la création d'emplois.
        </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">Visibilité auprès de plus de 1000 femmes entrepreneures</h3>
        <div class="text-justify">
            Bénéficiez d’une visibilité auprès de notre communauté, vous permettant de promouvoir votre marque et vos valeurs auprès d’un réseau engagé.
        </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">Dons ouverts aux réductions d'impôts</h3>
        <div class="text-justify">
            Profitez des avantages fiscaux liés aux dons à une association reconnue, tout en contribuant positivement à la communauté.
        </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">Impact social et RSE</h3>
        <div class="text-justify">
            Renforcez votre politique de Responsabilité Sociétale des Entreprises (RSE) en vous associant à un projet ayant un impact social réel et mesurable.
        </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">Connexion à tout notre écosystème</h3>
        <div class="text-justify">
            Élargissez votre réseau grâce à des interactions avec des acteurs clés de divers secteurs, et accédez à de nouvelles opportunités de collaboration.
        </div>

        <div class="flex flex-col justify-center items-center mt-10">

            <a href="https://www.helloasso.com/associations/lilas-les-independantes-libres-alignees-et-solidai/formulaires/1" target="_blank" class="bg-jaune py-4 px-6 rounded-xl font-black text-lg uppercase"> JE FAIS UN DON</a>
            </div>
    </div>
    

    @endsection
    
</body>
</html>