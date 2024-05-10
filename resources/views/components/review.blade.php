@props(['user', 'review', 'date', 'reviewId', 'reviewLikes'])


@props(['user', 'review', 'date'])

<div class="bg-white w-5/12 p-2 m-2 min-h-36 relative">
    <div class="flex justify-between">
        <p class="font-bold">{{ $user->name }}</p>
        <p class="text-gray text-xs">{{ $date }}</p>
    </div>
    <p class="text-sm ml-2">{{ $review }}</p>
    <p></p>
    <div class="flex-col flex absolute bottom-1 right-1 text-center">
        <h4 id="reviewLikes">{{ $reviewLikes }}</h4>
        <button id="likeBut" class="" onclick="likeReview({{ $reviewId }})">
            <img class="w-8" id="likeSVG" src="{{ asset('assets/svg/Upvote.svg') }}"
                data-like="{{ asset('assets/svg/Upvoted.svg') }}" data-unLike="{{ asset('assets/svg/Upvote.svg') }}">
        </button>
    </div>
</div>