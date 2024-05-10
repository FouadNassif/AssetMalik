@props(['item'])
<div class="bg-transparent p-2 m-5 text-white w-1/4">
    <a href="/store/{{ $item->id }}" class="flex flex-col items-center">

        <img src="{{ asset('assets/img/Razor2.png') }}" alt="" class="w-fit h-200p mb-2">
        <div>
            <h2 class="font-medium text-xl text-center">{{ $item->name }}</h2>
            <p class="text-center mt-3">${{ $item->price }}</p>
        </div>
    </a>
    <div class="flex px-1 justify-between">
        <button type="button" value="{{ $item->id }}" onclick="addFavoriteItem(this, {{ auth()->user()->id }})">
            <img class="w-8" id="favoriteImg_{{ $item->id }}" src="{{ asset('assets/svg/Favorite.svg') }}"
                data-favorite="{{ asset('assets/svg/Favorites.svg') }}"
                data-unfavorite="{{ asset('assets/svg/Favorite.svg') }}">
        </button>
        <button onclick="shareButton(`http://127.0.0.1:8000/store/{{ $item->id }}`)" value="" type="button"
            id="shareButton">
            <img src="{{ asset('assets/svg/Share.svg') }}" class="w-7">
        </button>
    </div>
</div>


<script>
    async function shareButton(f) {
        try {
            await navigator.clipboard.writeText(f);
            if (navigator.share) {
                navigator.share({
                    title: 'Share the RoomID via...',
                    text: f,
                });
            }
        } catch (error) {
            console.error('Error copying or sharing text:', error);
        }
    }
</script>
