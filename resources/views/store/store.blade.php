@extends('components.layout')

@section('title', 'Store')

@section('content')
    @include('partials._search')
    <div class="flex flex-wrap p-5">
        @foreach ($items as $item)
            <x-item-card :item="$item" />
        @endforeach
    </div>
    @foreach ($favoriteItemsId as $itemId)
        <script>
            document.getElementById(`favoriteImg_{{ $itemId }}`).src = "{{ asset('assets/svg/Favorites.svg') }}";
        </script>
    @endforeach

    <form action="" method="post">
        <div class="bg-P text-white w-3/4 rounded-2xl fixed top-1/2 left-1/2 transform hidden -translate-x-1/2 -translate-y-1/2 h-auto p-7"
            id="itemDes">
            <button type="button" onclick="closeItemDes()" class="float-right font-bold p-2 -mt-5"><img
                    src="{{ asset('assets/svg/close.svg') }}" class="w-soc h-soc cursor-pointer" alt=""></button>
            <div class="flex mt-5">
                <img src="{{ asset('assets/img/G1.jpeg') }}" alt="" class="w-2/4">
                <div class="ml-5">
                    <h1 class="font-bold text-2xl" id="item_name"></h1> <br>
                    <h2 id="item_des"></h2><br>
                    <p class="font-bold">Price: <span class="font-normal" id="item_price"></span></p><br>
                    <p class="font-bold">Quantity: <span class="font-normal" id="item_quan"></span></p>
                    <div class="flex mt-5">
                        @include('partials._quantity')
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" class="bg-S text-P p-3 font-bold mt-5 rounded-3xl">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
