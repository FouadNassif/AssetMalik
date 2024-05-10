@props(['user', 'review', 'date', 'reviewId', 'reviewLikes'])


@props(['user', 'review', 'date'])

<div class="bg-white w-5/12 p-2 m-2 min-h-40 max-h-44 relative rounded-2xl">
    <div class="flex justify-between">
        <p class="font-bold">{{ $user->name }}</p>
        <p class="text-gray text-xs">{{ $date }}</p>
    </div>
    <p class="text-sm ml-2">{{ $review }}</p>
    <div class="flex-col flex text-center mt-5">
        <img class="w-8" id="likeSVG" src="{{ asset('assets/svg/Upvote.svg') }}"
            data-like="{{ asset('assets/svg/Upvoted.svg') }}" data-unLike="{{ asset('assets/svg/Upvote.svg') }}">
        </button>
    </div>
</div>
