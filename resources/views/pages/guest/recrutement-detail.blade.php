@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @section('title', 'Recrutement')

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> NOS OFFRES D'EMPLOI </div>
    </div>

    <div class="flex space-x-2 font-bold text-lg relative top-8 ml-6">
        <div> Nous rejoindre </div> 
        <div> / </div> 
        <a href="{{route ('recrutement')}}"> Recrutement </a>
        <div> / </div> 
        <a href="#"> Assistante commerciale</a>
    </div>

    <div class="p-12 mt-6">

        <div> 
            <div class="flex items-center space-x-12">         
                <img class="rounded-xl h-48 w-48 object-cover" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                <div class="flex flex-col space-y-4"> 
                    <div class="uppercase font-black text-2xl whitespace-normal"> Assistante commerciale </div>
                    <div class="uppercase font-bold text-lg italic"> Fort-de-France </div>
                    <div class="uppercase font-semibold text-lg"> CDD </div>
                </div>
            
            </div>
        </div>

        <div class="mt-12"> 
            
            <div class="space-y-4">
            <div class="uppercase font-black text-xl">  Description :  </div>
            <div class="text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus tortor augue, facilisis vestibulum elementum vitae, tincidunt vel felis. Etiam lacinia nunc lacus, non egestas ante aliquam nec. Curabitur ut condimentum magna. Aliquam elementum, ipsum ut ornare tincidunt, quam lectus condimentum sapien, sed pellentesque nulla orci vel leo. Nunc cursus porttitor enim at dapibus. Maecenas diam sapien, interdum vitae elit at, congue volutpat turpis. Aliquam vitae eleifend eros, vitae placerat erat. Aenean augue sapien, sollicitudin non metus sit amet, bibendum finibus erat. Ut et purus lectus.

                Mauris at eros et velit vestibulum tempor. Nullam porttitor volutpat porttitor. Sed finibus condimentum diam sed ornare. Fusce dictum ex scelerisque tortor mattis faucibus et at libero. Etiam dui ligula, interdum ut enim quis, mollis cursus metus. Duis semper nec tellus et semper. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer a maximus tortor. Suspendisse sed turpis a est malesuada tempor id quis neque. Sed ultricies scelerisque nisl a ornare.
                
                Fusce pretium ac nunc ultrices iaculis. Quisque at consequat lorem. Vestibulum viverra enim sed magna ultricies tristique. Donec luctus mi molestie rhoncus faucibus. Nullam tincidunt quam ut vulputate varius. Sed augue tortor, semper vitae nunc nec, rutrum fringilla nisi. Suspendisse quis interdum elit.
                
                Donec facilisis nec diam sed mollis. Quisque massa nisl, aliquet eu felis ac, placerat molestie nisi. Nulla aliquam vulputate tellus, in ultricies nibh. Nam in dui vulputate, finibus est at, faucibus lacus. Cras bibendum dui neque, sit amet mollis ipsum dictum sed. Etiam faucibus iaculis tellus ac sollicitudin. Donec vitae vestibulum neque. Vestibulum vel condimentum est. Pellentesque vel felis ut ex iaculis vulputate. Praesent imperdiet eget sapien non varius. Proin et maximus lacus. Aliquam blandit nisl sed mauris blandit, at elementum augue iaculis. Morbi commodo efficitur auctor. </div>
            </div>

            <div class="space-y-4 mt-8">
                <div class="uppercase font-black text-xl">  Compétences :  </div>
                <div class="flex flex-col">
                <div> -Lorem ipsum dolor sit amet </div>
                <div> -Lorem ipsum dolor sit amet </div>
                <div> -Lorem ipsum dolor sit amet </div>
                <div> -Lorem ipsum dolor sit amet </div>
                </div>
            </div>

            <div class="space-y-4 mt-8">
                <div class="uppercase font-black text-xl">  Missions :  </div>
                <div class="flex flex-col">
                <div> -Lorem ipsum dolor sit amet </div>
                <div> -Lorem ipsum dolor sit amet </div>
                <div> -Lorem ipsum dolor sit amet </div>
                <div> -Lorem ipsum dolor sit amet </div>
                </div>
            </div>

<div class="space-y-4 mt-8">
                <div class="uppercase font-black text-xl">  Salaire :  </div>
                <div class="">
                    <div class="bg-[#f9e596] rounded-xl py-1.5 px-2 max-w-32 text-center whitespace-normal font-bold">1200€</div>
                </div>
</div>

<div class="space-y-4 mt-8">
                <div class="uppercase font-black text-xl">  Contactez-nous pour postuler :  </div>
                <div class="space-y-2">
                <div class="flex space-x-3"> 
                  <div>  <i class="fa-solid fa-at text-lg"></i> </div>
                <div class="font-semibold text-lg"> adressemail@gmail.com </div>
                </div>
                <div class="flex space-x-3"> 
                    <div>  <i class="fa-solid fa-phone text-lg"></i> </div>
                  <div class="font-semibold text-lg"> 0697 76 86 65</div>
                  </div>
                </div>
</div>
                

        </div>

    </div>

    @endsection

</body>
</html>