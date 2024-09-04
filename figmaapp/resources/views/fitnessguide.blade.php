<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fitnessguide.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    @vite('resources/css/app.css')
    
</head>
<body class="bg-slate-200">
    
    <div class="container flex flex-col md:flex-row">
        <div class="nav bg-black p-4 mt-4 md:ml-4 rounded-md w-full md:w-60" style="height: 470px;">
            <h3 class="text-white text-2xl font-bold tracking-widest mb-4">FITNESS GUIDE</h3>
            <hr class="mb-2">
            
            <ul>
                <li class="text-white mb-2 hover:bg-pink-600 p-3">
                    <a href="#" class="flex items-center space-x-6">
                        <i class="fa-solid fa-user"></i>
                        <span>Hello {{$name}}</span>
                    </a>
                </li>
                <hr class="mb-2">
                <div class=" mb-2">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class=" text-white p-3 pr-20  cursor-pointer hover:bg-pink-600">
                         
                      <i class="fa-solid fa-sign-out-alt   "></i> <span class="ml-6">Logout </span>
                        </button> 
                    </form>
                </div>

                <hr class="mb-2">
                <li class="text-white  mb-2 p-3 hover:bg-pink-600 cursor-pointer" onclick="toggleSubMenu()">
                    <div class="flex items-center space-x-4">
                        <i class="fa-solid fa-bars"></i>
                        <span>Dashboard</span>
                    </div>
                </li>
               
                  <ul id="sub-menu" class="pl-1 mt-2 hidden">
                    <li class="text-white mb-2 hover:bg-pink-600 p-2">
                        <a href="#" class="flex items-center space-x-6">
                            <i class="fa-brands fa-instagram"></i>
                            <span>Instagram</span>
                        </a>
                    </li>
                    <li class="text-white mb-2 hover:bg-pink-600 p-2">
                        <a href="#" class="flex items-center space-x-6">
                            <i class="fa-solid fa-book-open"></i>
                            <span>Blog-1</span>
                        </a>
                    </li>
                    <li class="text-white mb-2 hover:bg-pink-600 p-2">
                        <a href="#" class="flex items-center space-x-6">
                            <i class="fa-solid fa-book-open"></i>
                            <span>Blog-2</span>
                        </a>
                    </li>
                    <li class="text-white mb-2 hover:bg-pink-600 p-2">
                        <a href="#" class="flex items-center space-x-6">
                            <i class="fa-solid fa-blog"></i>
                            <span>Blog-3</span>
                        </a>
                    </li>
                </ul>

            </ul>
            <hr class="mt-3">
        </div>
    
        <div class="box m-5 flex-1">
            <p><i class="fa-solid fa-house"></i> / Dashboard</p>
            <h1 class="font-bold text-lg">Dashboard</h1>

            <div class="box-1 p-5 mt-3 rounded-lg bg-white shadow-md ring-2 ring-gray-300">
                <h1 class="text-xl font-bold font-sans">Week 1</h1>

              
                <div class="sub-box p-3 mt-3 bg-gray-100 rounded-xl">
                    <h1 class="font-bold">10 Push Ups x 3 sets</h1>
                    <div class="flex flex-wrap justify-center gap-5 p-5">
                        <iframe class="w-full sm:w-[48%] md:w-[350px]" height="197" src="https://www.youtube.com/embed/zkU6Ok44_CI?si=it-Yock_0t_kPeIp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <iframe class="w-full sm:w-[48%] md:w-[350px]" height="197" src="https://www.youtube.com/embed/zkU6Ok44_CI?si=it-Yock_0t_kPeIp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>

               
                <div class="sub-box p-5 mt-5 bg-gray-100 rounded-xl">
                    <h1 class="font-bold">10 squads Ups x 3 sets</h1>
                    <div class="flex flex-wrap justify-center gap-5 p-5">
                        <iframe  class="w-full sm:w-[48%] md:w-[350px]" height="197" height="315" src="https://www.youtube.com/embed/4KmY44Xsg2w?si=tCFIoYk6Q0KVpT1A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <iframe class="w-full sm:w-[48%] md:w-[350px]" height="197" src="https://www.youtube.com/embed/ODpBP5tmfNQ?si=knpXelhwLxxlF1FN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
                    </div>
                </div>

                
                <div class="sub-box p-5 mt-5 bg-gray-100 rounded-xl">
                    <h1 class="font-bold">10 jumping x 3 sets</h1>
                    <div class="flex flex-wrap justify-center gap-5 p-5">
                        <iframe  class="w-full sm:w-[48%] md:w-[350px]" height="197" src="https://www.youtube.com/embed/XCd0LIieCw0?si=mHFbgal9nGJ6rXfc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <iframe  class="w-full sm:w-[48%] md:w-[350px]" height="197" src="https://www.youtube.com/embed/5yrRws8Du1k?si=Tmb5wnfWJmVMAIXN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
       
        function toggleSubMenu() {
            const subMenu = document.getElementById('sub-menu');
            subMenu.classList.toggle('hidden');
        }
    </script>
</body>
</html>
