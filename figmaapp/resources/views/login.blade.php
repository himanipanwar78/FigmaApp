<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login into figma</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
    integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    @vite('resources/css/app.css')
</head>

<body class="bg-slate-900 flex items-center justify-center min-h-screen">
   
    <div class="user-form w-full max-w-md">
        <h1 class="text-center text-white text-xl mx-4 p-6 relative top-8 bg-pink-600 rounded">SIGN UP</h1>
   
        <form class="flex flex-col space-y-4 bg-white p-8 rounded-md"
              action="{{ route('login') }}" method="POST">
        
            @csrf
            <input type="email" name="email" placeholder="Your Email" class="p-2 border border-gray-300 rounded mt-4" required>
            <input type="password" name="password" placeholder="Password" class="p-2 border border-gray-300 rounded mt-4" required>
            
            <button type="submit" class="text-white text-sm font-bold bg-pink-600 rounded p-4">SIGN UP</button>
        </form>
        @if (session('success'))
        <script>
            Swal.fire({
                title: 'Welcome to Figma!',
                text: "{{ session('success') }}",
                icon: 'success',
                customClass: {
                    popup: 'custom-swal',  
                },
                timer: 2000, 
                timerProgressBar: true, 
               
            });
        </script>
    @endif
    

    {{-- @if (session('error'))
        <script>
            swal("Error!", "{{ session('error') }}", "error");
        </script>
    @endif --}}
    @if (session('error'))
    <script>
        Swal.fire({
            title: 'Error',
            text: "{{ session('error') }}",
            icon: 'success',
            customClass: {
                popup: 'custom-swal',  
            },
            timer: 2000, 
            timerProgressBar: true, 
           
        });
    </script>
@endif
    </div>
</body>
</html>
