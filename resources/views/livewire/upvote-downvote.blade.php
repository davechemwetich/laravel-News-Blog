<div class="flex gap-2">
    <button wire:click="upvoteDownvote(true)"
        class="flex gap-2 items-center hover:text-blue-500 transition-all {{ $hasUpvote ? 'text-blue-500' : '' }}">
        👍
        {{ $upvotes }}
    </button>

    <button wire:click="upvoteDownvote(false)"
        class="flex gap-2 items-center hover:text-blue-500 transition-all {{ $hasUpvote === false ? 'text-blue-500' : '' }}">
        👎
        {{ $downvotes }}
    </button>
</div>
