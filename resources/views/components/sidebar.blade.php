<!-- Sidebar Section -->
<aside class="w-full md:w-1/3 flex flex-col items-center px-3">

    <div class="rounded-xl border border-gray-800 w-full bg-white shadow flex flex-col my-4 p-6">
        <h3 class="text-xl font-semibold mb-3">All Categories
        </h3>
        @foreach ($categories as $category)
            <a href="{{ route('by-category', $category) }}"
                class="text-semibold block py-2 px-3 rounded {{ request('category')?->slug === $category->slug ? 'bg-blue-600 text-white' : '' }}">
                {{ $category->title }} ({{ $category->total }})
            </a>
        @endforeach
    </div>




    <div class="w-full bg-white block rounded-xl border border-gray-800  p-4 shadow-xl sm:p-6 lg:p-8" href="">

        <h3 class="mt-3 text-lg font-bold text-white sm:text-xl">
            {{ \App\Models\TextWidget::getTitle('about-us-sidebar') }}
        </h3>

        <p class="mt-4 text-sm text-white">
            {!! \App\Models\TextWidget::getContent('about-us-sidebar') !!}
        </p>
        <a href="{{ route('about-us') }}"
            class="w-full bg-purple-800 text-white font-bold text-sm uppercase rounded hover:bg-purple-700 flex items-center justify-center px-2 py-3 mt-4">
            Get to know us
        </a>
    </div>



    <div class="w-full bg-white block rounded-xl border border-gray-800  p-4 shadow-xl sm:p-6 lg:p-8">
        <a href="#" class="group relative block overflow-hidden">
            <button
                class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75">
                <span class="sr-only">Wishlist</span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-4 w-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
            </button>

            <img src="https://telegra.ph/file/769d3f1b20a07add768b5.jpg" alt=""
                class="h-64 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

            <div class="relative border border-gray-100 bg-white p-6">
                <span class="whitespace-nowrap bg-purple-400 px-3 py-1.5 text-xs font-medium">
                    New
                </span>

                <h3 class="mt-4 text-lg font-medium text-gray-900">java</h3>

                <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

                <form class="mt-4">
                    <button
                        class="block w-full rounded bg-purple-400 p-4 text-sm font-medium transition hover:scale-105">
                        Add to Cart
                    </button>
                </form>
            </div>
        </a>
    </div>
</aside>
