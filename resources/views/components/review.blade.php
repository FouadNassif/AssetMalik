@props(['user', 'review', 'date', 'reviewId', 'reviewLikes'])
@props(['user', 'review', 'date'])

<div class="bg-white w-Rev h-200p p-2 m-2 min-h-Rev max-h-Rev rounded-xl overflow-y-auto">
    <div class="flex justify-between">
        <p class="font-bold">{{ $user->name }}</p>
        <p class="text-gray text-xs">{{ $date }}</p>
    </div>
    <div class="flex">
        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
    </div>
    <p class="text-sm ml-2 font-medium">{{ $review }}</p>
</div>
