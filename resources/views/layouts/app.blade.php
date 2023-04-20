<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $metaTitle ?: '' }}</title>
    <meta name="author" content="">
    <meta name="description" content="{{ $metaDescription }}">

    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
    </style>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body class="bg-gray-50 font-family-karla">

    <header aria-label="Site Header" class="shadow-sm" id="header">
        <div class="mx-auto flex h-16 max-w-screen-xl items-center justify-between px-4">
            <div class="flex w-0 flex-1 lg:hidden">
                <button class="rounded-full bg-gray-100 p-2 text-gray-600" type="button">
                    <span class="sr-only">Account</span>
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewbox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </button>
            </div>

            <div class="flex items-center gap-4">
                <a href="{{ route('home') }}">
                    <span class="sr-only">Logo</span>
                    <span class="h-10 w-20 rounded-lg bg-gray-200"></span>
                </a>




                <form method="get" action="{{ route('search') }}" class="ml-auto mb-0 hidden lg:flex">
                    <div class="relative">
                        <input name="q" value="{{ request()->get('q') }}"
                            class="h-10 rounded-lg border-gray-200 pe-10 text-sm placeholder-gray-300 focus:z-10"
                            placeholder="Search..." type="text" />

                        <button type="submit" class="absolute inset-y-0 end-0 rounded-r-lg p-2 text-gray-600">
                            <span class="sr-only">Submit Search</span>
                            <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </form>




            </div>

            <div class="flex w-0 flex-1 justify-end lg:hidden">
                <button class="rounded-full bg-gray-100 p-2 text-gray-500" type="button">
                    <span class="sr-only">Menu</span>
                    <svg class="h-5 w-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <nav aria-label="Site Nav"
                class="hidden items-center justify-center gap-8 text-sm font-medium lg:flex lg:w-0 lg:flex-1">
                <a class="text-gray-900" href="{{ route('home') }}">home</a>

                @foreach ($categories as $category)
                    <a class="text-gray-900" href="{{ route('by-category', $category) }}">{{ $category->title }}</a>
                @endforeach
                <a class="text-gray-900" href="{{ route('about-us') }}">About</a>
                <a class="text-gray-900" href="">Projects</a>
                <a class="text-gray-900" href="">Contact</a>
            </nav>

            @auth
                <div class="ml-4 flex items-center">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="hover:bg-blue-600 hover:text-white flex items-center rounded py-2 px-4 mx-2">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @else
                <div class="ml-4 flex items-center">
                    <a href="{{ route('login') }}"
                        class="hover:bg-blue-600 hover:text-white rounded py-2 px-4 mx-2">Login</a>
                    <a href="{{ route('register') }}" class="bg-blue-600 text-white rounded py-2 px-4 mx-2">Register</a>
                </div>
            @endauth

        </div>

        <div class="border-t border-gray-100 lg:hidden">
            <nav class="flex items-center justify-center overflow-x-auto p-4 text-sm font-medium">
                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ route('home') }}">home</a>

                @foreach ($categories as $category)
                    <a class="flex-shrink-0 pl-4 text-gray-900"
                        href="{{ route('by-category', $category) }}">{{ $category->title }}</a>
                @endforeach
                <a class="flex-shrink-0 pl-4 text-gray-900" href="{{ route('about-us') }}">about-us</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="">Projects</a>
                <a class="flex-shrink-0 pl-4 text-gray-900" href="">Contact</a>
            </nav>
        </div>
    </header>



    <div class="container mx-auto py-6">

        {{ $slot }}

    </div>


    <footer class=" py-4 container mx-auto">
        <div class="container mx-auto flex justify-between items-center">
            <p class="text-gray-500 text-sm" id="copyright">
                © <span id="currentYear"></span> Company Name. All rights reserved.
            </p>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-gray-500 hover:text-white transition duration-300">Terms of Use</a>
                </li>
                <li><a href="#" class="text-gray-500 hover:text-white transition duration-300">Privacy
                        Policy</a>
                </li>
                <li><a href="#" class="text-gray-500 hover:text-white transition duration-300">Contact Us</a>
                </li>
            </ul>
        </div>
    </footer>

    @livewireScripts

</body>

</html>
