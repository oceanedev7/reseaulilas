@extends("layouts.main")
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Soutenez le Réseau L.I.L.A.S</title>
    <meta name="description" content="Découvrez les avantages de devenir bénévole au Réseau L.I.L.A.S. et engagez-vous pour l’autonomisation des femmes entrepreneures en Martinique. Apportez votre soutien et enrichissez votre expérience tout en contribuant à une cause significative.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> DEVENIR BÉNÉVOLE </div>
    </div>

    <div class="flex space-x-2 font-bold text-lg relative top-10 ml-6">
        <div> Nous rejoindre </div> 
        <div> / </div> 
        <a href="{{route ('devenir-benevole')}}"> Devenir bénévole </a>
    </div>

   
    <div class="w-full p-12">

        <h2 class="text-jaune font-black text-center uppercase text-3xl mt-10 mb-6">
            6 Avantages de devenir bénévole
        </h2>
    
        <div class="text-justify">
            Devenir bénévole au sein du Réseau L.I.L.A.S. est un engagement précieux qui a un impact significatif tant sur l'économie locale que sur le bien-être social.  Nos actions, qu'elles soient menées sur le terrain ou à travers des campagnes de communication sur divers médias et réseaux sociaux, permettent de créer un écosystème de soutien et d'entraide. En rejoignant notre équipe de bénévoles, vous aurez l'opportunité de participer activement à des initiatives qui transforment des vies. Votre engagement ne valorise pas seulement votre propre expérience, mais renforce également notre mission collective en faveur d'une société plus inclusive.        </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2"> Contribuer à l'égalité des chances</h3>
        <div class="text-justify">
            En devenant bénévole, vous participez à réduire les inégalités en soutenant des femmes dans leurs projets entrepreneuriaux. </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2"> Soutenir l'économie locale</h3>
        <div class="text-justify">
            En aidant des femmes à créer et développer leurs entreprises, vous encouragez la croissance de l'économie locale. Les entrepreneuses génèrent des emplois et des opportunités qui bénéficient à toute la communauté.  </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">Développer vos compétences</h3>
        <div class="text-justify">
            Le bénévolat est une excellente opportunité pour acquérir de nouvelles compétences professionnelles ou personnelles, telles que la gestion de projet, le mentorat ou la communication, tout en contribuant à une cause.   </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">Renforcer votre réseau</h3>
        <div class="text-justify">
            En travaillant avec des femmes entrepreneuses, vous élargissez votre réseau professionnel. Vous pourrez rencontrer des entrepreneuses, des expertes, et des partenaires potentiels de divers secteurs.  </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">Impacter positivement la société</h3>
        <div class="text-justify">
            Votre engagement contribue à renforcer l'autonomie des femmes, à promouvoir la diversité et à soutenir des initiatives qui ont un réel impact sur la société. </div>
    
        <h3 class="text-jaune text-xl font-bold mt-8 mb-2">S'épanouir personnellement</h3>
        <div class="text-justify">
            Le bénévolat offre un sentiment d'accomplissement et de satisfaction. Aider les autres à réussir est gratifiant et peut vous apporter un épanouissement personnel profond.   </div>
    </div>

   
    

      

    @endsection

</body>
</html>