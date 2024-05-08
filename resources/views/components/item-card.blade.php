@props(['item'])

<div class="bg-transparent border border-S w-80 p-2 m-3 text-left rounded-2xl text-White flex flex-col">
    <a href="/store/{{ $item->id }}">
        <img src="{{ asset('assets/img/Razor2.png') }}" alt="" class="w-fit h-200p rounded-t-2xl ml-12"><br>
        <h2 class="font-medium text-xl text-center">{{ $item->name }}</h2><br>
        <p class="font-bold text-center mb-3">$<span class="font-medium">{{ $item->price }}</span></p> <br>
    </a>
    <button type="button" value="{{ $item->id }}" onclick="addFavoriteItem(this, {{ auth()->user()->id }})">
        <img class="w-soc mt-5 h-soc" id="favoriteImg_{{ $item->id }}" src="{{ asset('assets/svg/Favorite.svg') }}" 
        data-favorite="{{ asset('assets/svg/Favorites.svg') }}"
        data-unfavorite="{{ asset('assets/svg/Favorite.svg') }}">

    </button>
</div>