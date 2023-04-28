<article class="rounded-sm  p-0.5 shadow-xl transition hover:shadow-sm">
    <!-- Article Image -->
    <a href="{{ route('view', $post) }}" class="flex-shrink-0">
        <img src="{{ $post->getThumbnail() }}" alt="{{ $post->title }}"
            class="h-30 w-full rounded-xl object-cover shadow-xl transition group-hover:grayscale-[50%]" />
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        <div class="flex gap-4">
            @foreach ($post->categories as $category)
                <a href="#" class="bg-blue-500 text-white p-1 rounded text-xs font-bold uppercase">
                    {{ $category->title }}
                </a>
            @endforeach
        </div>
        <a class="text-base font-bold leading-tight text-gray-800 hover:text-blue-500">
            {{ $post->title }}</a>
        @if ($showAuthor)
            <p href="#" class="text-sm pb-3">
                By <a href="#" class="font-semibold hover:text-gray-800">{{ $post->user->name }}</a>, Published on
                {{ $post->getFormattedDate() }} {{ $post->human_read_time }}
            </p>
        @endif

        <a href="{{ route('view', $post) }}" class="mt-2 line-clamp-3 text-sm/relaxed text-gray-500">
            {{ $post->shortBody(15) }}
        </a>



        <a href="{{ route('view', $post) }}"
            class="group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600">
            Find out more

            <span aria-hidden="true" class="block transition-all group-hover:ms-0.5 rtl:rotate-180">
                &rarr;
            </span>
        </a>
    </div>
</article>
