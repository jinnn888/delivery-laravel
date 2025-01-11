<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-100">
    <header>
        <nav class='flex flex-row bg-white justify-between p-6 '>
            <div>
                <h4 class='text-lg text-green-700 font-bold tracking-wide'>PenJy</h4>
            </div>
            <ul class='navbar-menu flex flex-row gap-4 items-center shadow-lg md:shadow-none'>
                <li><a href="" class='text-green-700 font-semibold hover:underline'>Home</a></li>
                <li><a href="" class='text-green-700 font-semibold hover:underline'>Items</a></li>
                <li class='bg-green-600 md:bg-none'><a href="/login" class=' rounded text-white md:text-white md:bg-green-700 px-4 py-2 font-semibold hover:bg-green-800 duration-200'>Login</a></li>
            </ul>
            <div class="hamburger-menu md:hidden" id="hamburger-menu">
                <span>&#9776;</span> <!-- Hamburger icon -->
            </div>
        </nav>
    </header>



    {{-- Hero Se'ction --}}
    <section class='text-center flex flex-col items-center justify-center bg-gray-700 h-[65vh] w-100'>
        <div class=''>
            <h2 class='text-5xl text-green-800 font-bold'>Welcome to PenJy!</h2>
        </div>
    </section>

    {{-- Items Section --}}
    <section class='mt-4'>
        <div class='w-full text-center flex items-center justify-center'>
            <h2 class='text-4xl  text-green-800' style="font-family: 'Lora';">Your Neighborhood Delivery Service</h2>
        </div>    
        <div class='mt-6 w-full flex items-center justify-center'>
            <div class='shadow-md rounded flex flex-col gap-4 p-4'>
                {{-- Product Image --}}
                <img class='w-[300px] object-cover rounded' src="{{ asset('images/items/nj-pc-1.png') }}">
                {{-- Product Description --}}
                <div class=''>
                    <h2 class='text-gray-600 font-semibold text-lg '>NewJeans Photo Card</h2>
                    <p>{{ Str::limit('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 40) }}</p>

                    <button class='bg-green-800 text-white rounded shadow-md px-4 py-1 mt-2'>View item</button>
                </div>
            </div>
        </div>
    </section>



<script type="text/javascript">
    const hamburgerMenu = document.querySelector('.hamburger-menu')
    const navMenu = document.querySelector('.navbar-menu')

    hamburgerMenu.addEventListener('click', () => {
        navMenu.classList.toggle('active');
    })

</script>

</body>
<html>
