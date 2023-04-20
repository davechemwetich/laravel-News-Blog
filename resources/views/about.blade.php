<x-app-layout>

    <div class="container mx-auto flex flex-wrap py-6">

        {{-- About Us Page --}}

        {{-- modifications --}}
        <div class="bg-white py-12">
            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">About Us</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Our Blog
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Welcome to our company blog. Here you'll find the latest news and insights from our team.
                    </p>
                </div>

                <div class="mt-10 flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/2">
                        <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
                            @if ($widget && $widget->image)
                                <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                    src="/storage/{{ $widget->image }}">
                            @endif

                            <div class="p-6">
                                <h2 class="text-base font-medium text-indigo-600">January 2023</h2>
                                <h3
                                    class="mt-2 text-2xl leading-7 font-bold text-gray-900 hover:text-indigo-600 transition duration-150 ease-in-out">
                                    {{ $widget ? $widget->title : '' }}</h3>
                                <p class="mt-3 text-base text-gray-500">
                                    {!! $widget ? $widget->content : '' !!}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-4 md:w-1/2">
                        <div class="h-full border-2 border-gray-200 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="https://source.unsplash.com/featured/?blog" alt="Blog post">
                            <div class="p-6">
                                <h2 class="text-base font-medium text-indigo-600">December 2023</h2>
                                <h3
                                    class="mt-2 text-2xl leading-7 font-bold text-gray-900 hover:text-indigo-600 transition duration-150 ease-in-out">
                                    Our Company's History</h3>
                                <a class="mt-3 text-base text-gray-500">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida euismod
                                    bibendum.
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- More blog posts here -->
                </div>
            </div>
        </div>
        {{-- modification --}}

</x-app-layout>
