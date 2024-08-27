@extends("layouts.main")

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @section('title', 'Devenir adhérente')

    @section('content')

    <div class="bg-jaune h-56 w-full flex justify-center items-center">
        <div class="font-black text-4xl"> DEVENIR ADHÉRENTE </div>
    </div>


    <div class=" w-full p-12">

        <div class="font-black text-xl p-8"> POURQUOI ADHÉRER ? </div>

        <div class="flex flex-row items-center justify-center space-x-32 p-12">
     
                <div class="h-60 w-60">
                    <img class=" h-60 w-60 rounded-xl object-cover ransition-transform duration-300 ease-in-out transform hover:scale-105" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
                </div>
    
            <div class="flex flex-col space-y-6"> 
                <div class="relative font-black text-lg group">
                    <a href="#" class="text-black text-xl ml-12 ">QUI SOMMES-NOUS ?</a>
                </div>
                <div class="max-w-xl text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non sem condimentum, ullamcorper ante et, 
                    efficitur leo. Aenean eget urna fringilla, fringilla ipsum eu, porta erat. Fusce gravida justo ut orci ultrices
                     consectetur. Vivamus lacinia risus non nunc dignissim, ut tristique sapien euismod. Nullam sed mi varius 
                     ipsum blandit mollis. Sed lacinia tempus est in efficitur. Integer aliquam ut eros ac elementum. 
                </div>
            </div>
    
        </div>


        <div class="flex flex-row items-center justify-center space-x-32 p-12">

     <div class="flex flex-col space-y-6"> 
            <div class="relative font-black text-lg group flex justify-end">
                <a href="#" class="text-black text-xl mr-12">QUI SOMMES-NOUS ?</a>
            </div>
            <div class="max-w-xl text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non sem condimentum, ullamcorper ante et, 
                efficitur leo. Aenean eget urna fringilla, fringilla ipsum eu, porta erat. Fusce gravida justo ut orci ultrices
                 consectetur. Vivamus lacinia risus non nunc dignissim, ut tristique sapien euismod. Nullam sed mi varius 
                 ipsum blandit mollis. Sed lacinia tempus est in efficitur. Integer aliquam ut eros ac elementum. 
            </div>
        </div>

            <div class="h-60 w-60">
                <img class=" h-60 w-60 rounded-xl object-cover ransition-transform duration-300 ease-in-out transform hover:scale-105" src="{{ asset('storage/images/photoaccueil.jpg') }}" alt="">
            </div>
     
        </div>

       <div class="flex flex-col justify-center items-center p-12 space-y-6">
    <div class="font-black text-2xl text-center"> ADHÉRER EN LIGNE </div>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 72" stroke="currentColor" class="w-6 h-18">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v64m0 0l6-6m-6 6l-6-6" />
    </svg>
    <a href="https://www.helloasso.com/associations/lilas-les-independantes-libres-alignees-et-solidai" target="_blank" class="bg-jaune py-4 px-6 rounded-xl font-black text-lg"> JE VEUX DEVENIR ADHÉRANTE</a>
    </div>

    </div> 

 
      
      
      
      


    @endsection
</body>
</html>