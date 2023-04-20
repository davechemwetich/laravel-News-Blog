<x-app-layout meta-title="Dreamhacks_Blog" meta-description="Lorem ipsum dolor sit amet, consectetur adipisicing elit">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <div class="container mx-auto py-6 px-4 md:px-0">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
            <!-- Latest Post -->
            <article class="overflow-hidden rounded-lg border border-gray-100 shadow-sm col-span-2">

                <strong class="text-sm font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                    Latest Post
                </strong>
                @if ($latestPost)
                    <x-post-item :post="$latestPost" />
                @endif
            </article>

            {{-- UI mod popular post --}}
            <article class="rounded-sm  p-0.5 shadow-xl transition hover:shadow-sm">
                <div>
                    <strong class="text-sm font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                        Popular Posts
                    </strong>
                    @foreach ($popularPosts as $post)
                        <div class="rounded-[10px] bg-white p-4 !pt-20 sm:p-6">
                            <a href="{{ route('view', $post) }}" class="flex-shrink-0">
                                <img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}"
                                    class="h-56 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />
                            </a>
                            <div class="flex flex-col justify-between py-2 px-3">
                                <a href="{{ route('view', $post) }}">
                                    <a class="text-base font-bold leading-tight text-gray-800 hover:text-blue-500">
                                        {{ $post->title }}</a>
                                </a>
                                <div class="flex gap-2 ">
                                    @foreach ($post->categories as $category)
                                        <a href="#"
                                            class="bg-blue-500 text-white p-1 rounded text-xs font-bold uppercase">{{ $category->title }}</a>
                                    @endforeach
                                </div>
                                <div class="text-sm text-gray-600">{{ $post->shortBody(15) }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
        </article>
        {{-- End Of UI mod popular post --}}



        <!-- Recommended posts -->
        <div class="mb-8">
            <strong class="text-sm font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3">
                Recomended Posts
            </strong>

            <div class="grid grid-cols-4 gap-4">
                @foreach ($recommendedPosts as $post)
                    <x-post-item :post="$post" :show-author="false" />
                @endforeach
            </div>
        </div>

        <!-- Latest Categories -->

        @foreach ($categories as $category)
            <div class="mb-8">
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-2 border-b-4 border-blue-500 mb-4">
                    <span class="mr-2">{{ $category->title }}</span>
                    <a href="{{ route('by-category', $category) }}" class="text-gray-600 hover:text-gray-800">
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach ($category->publishedPosts()->limit(3)->get() as $post)
                        <x-post-item :post="$post" :show-author="false" class="mb-4" />
                    @endforeach
                </div>
            </div>
        @endforeach
</x-app-layout>
