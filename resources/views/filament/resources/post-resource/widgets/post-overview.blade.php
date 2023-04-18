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
