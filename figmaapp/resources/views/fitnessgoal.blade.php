<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fitnessgoal.com</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen">
    
    <div class="user-form w-full max-w-md">
        <h1 class="text-center text-white text-xl mx-4 p-6 relative top-8 bg-pink-600 rounded">Get Your Fitness Guide Now</h1>
             
        <div class="boxes flex flex-col bg-white p-8 rounded-md justify-center">
           
          <a href="{{url('/fitnessguide')}}"> 
            <div class="box-1 p-5 bg-slate-500 flex flex-col items-center justify-center mx-20 mt-10 mb-5 rounded-lg hover:bg-pink-600">
                <img src="{{ asset('images/looseweight-removebg-preview.png') }}" alt="Lose Weight" class="w-20 h-20">
                <p class="text-center text-white text-lg mt-2">Lose Weight</p>
            </div>
        </a> 
          
        <a href="{{url('/fitnessguide')}}">
        <div class="box-2 p-5 bg-slate-500 flex flex-col items-center justify-center mx-20 my-5 rounded-lg  hover:bg-pink-600">
                <img src="{{ asset('images/bodybuilding-removebg-preview.png') }}" alt="Body Building" class="w-20 h-20">
                <p class="text-center text-white text-lg mt-2">Body Building</p>
            </div>
        </a>
        </div>
    </div>

</body>
</html>
