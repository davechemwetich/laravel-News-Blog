<x-filament::widget>
    <x-filament::card>
        {{-- Widget content --}}
        <h2 class="text-lg sm:text-xl font-bold tracking-tight">
            Views
        </h2>
        <div class="flex gap-2">
            <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
            <lord-icon src="https://cdn.lordicon.com/mrjuyheh.json" trigger="hover"
                colors="outline:#121331,primary:#231e2d,secondary:#86c716,tertiary:#c7166f"
                style="width:32px;height:32px">
            </lord-icon>
            {{ $viewCount }}
        </div>

        <h2 class="text-lg sm:text-xl font-bold tracking-tight">
            Upvotes
        </h2>
        <div class="flex gap-2">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
            </svg> --}}
            <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
            <lord-icon src="https://cdn.lordicon.com/jffauosv.json" trigger="hover" colors="primary:#6c16c7"
                style="width:32px;height:32px">
            </lord-icon>
            {{ $upvotes }}
        </div>

        <h2 class="text-lg sm:text-xl font-bold tracking-tight">
            Downvotes
        </h2>
        <div class="flex gap-2">
            <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
            <lord-icon src="https://cdn.lordicon.com/ttibpwkn.json" trigger="hover" colors="primary:#4f1091"
                style="width:32px;height:32px">
            </lord-icon>
            {{ $downvotes }}
        </div>
    </x-filament::card>
</x-filament::widget>
