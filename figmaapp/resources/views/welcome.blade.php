<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>figma.com</title>
    
    <!-- SweetAlert Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @vite('resources/css/app.css')

</head>
<body class="bg-slate-900 flex items-center justify-center min-h-screen">
    
    <div class="user-form w-full max-w-md">
        <h1 class="text-center text-white text-xl mx-4 p-6 relative top-8 bg-pink-600 rounded">Get Your Fitness Guide Now</h1>
   
        <form class="flex flex-col space-y-4 bg-white p-8 rounded-md"
            action="{{ route('form.store') }}" method="POST">
        
            @csrf
            <input type="text" name="name" placeholder="Your Name" class="p-2 border border-gray-300 rounded mt-8" required>
            <input type="email" name="email" placeholder="Your Email" class="p-2 border border-gray-300 rounded mt-4" required>
            <input type="password" name="password" placeholder="Password" class="p-2 border border-gray-300 rounded mt-4" required>
            <input type="text" name="mobilenumber" placeholder="Your Mobile Number" class="p-2 border border-gray-300 rounded mt-4" required>
            <button type="submit" class="text-white text-sm font-bold bg-pink-600 rounded p-4">Enroll Now</button> 
             
            <h1 class="text-lg font-bold text-pink-600 cursor-pointer text-center">
                <a class="nav-link" href="{{ url('/signup') }}">
                    <span class="hover:underline">Sign-Up</span>
                </a>
                <span class="text-sm font-light">(if already enrolled)</span>
            </h1>
        </form>
        
        <!-- SweetAlert Integration -->
        @if ($errors->has('email'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'email is already registered. Please use a different email',
                    confirmButtonText: 'Try Again',
                    timer:3000,
                    width: '400px',
                    height: '150px', 
                });
            </script>
        @endif
        
       
        
        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{{ session('error') }}',
                });
            </script>
        @endif
    </div>

</body>
</html>
