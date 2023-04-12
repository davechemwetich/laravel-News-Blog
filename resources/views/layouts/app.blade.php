<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Blog Template</title>
    <meta name="author" content="">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>

<body class="bg-white font-family-karla">


    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5l" href="#">
                davesnews blog
            </a>
            <p class="text-lg text-gray-600">
                {{ \App\Models\TextWidget::getTitle('header') }}
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <div class="flex h-screen">
        <nav class="bg-gray-800 text-white w-56 flex-none hidden lg:block">
            <div class="p-4">
                <a href="#" class="font-semibold text-xl">Logo</a>
            </div>
            <ul class="flex flex-col divide-y divide-gray-700">
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#">Home</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#">About</a>
                </li>
                <li class="px-4 py-2 hover:bg-gray-700">
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </nav>
        <div class="w-full px-4 lg:px-8 py-8">
            <!-- Your page content goes here -->
        </div>
    </div>

    <!-- This is the mobile navigation menu -->
    <nav class="bg-gray-800 text-white fixed bottom-0 left-0 right-0 z-50 lg:hidden" id="mobile-nav">
        <ul class="flex flex-col divide-y divide-gray-700">
            <li class="px-4 py-2 hover:bg-gray-700">
                <a href="#">Home</a>
            </li>
            <li class="px-4 py-2 hover:bg-gray-700">
                <a href="#">About</a>
            </li>
            <li class="px-4 py-2 hover:bg-gray-700">
                <a href="#">Contact Us</a>
            </li>
        </ul>
    </nav>

    {{-- script  --}}
    <script>
        const toggleButton = document.getElementById('toggle-button');
        const mobileNav = document.getElementById('mobile-nav');

        toggleButton.addEventListener('click', () => {
            mobileNav.classList.toggle('hidden');
        });
    </script>


    <div class="container mx-auto flex flex-wrap py-6">

        {{ $slot }}


    </div>

    <footer class="w-full border-t bg-white pb-12">

    </footer>


</body>

</html>
