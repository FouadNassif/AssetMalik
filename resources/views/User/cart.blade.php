@extends('components.blankpage')

@section('title', 'Cart')

@section('content')
    @include('partials._navbar')
    @auth
        <style>
            body {
                overflow: hidden;
                f
            }
        </style>
        <div class="w-11/12 mx-auto flex h-screen">
            <div class="bg-white w-full p-5 mt-10 rounded-l-2xl h-3/4 overflow-hidden">
                @if ($allCart->count() > 0)
                    <div class="flex flex-col justify-between w-full h-full overflow-y-scroll">
                        @foreach ($allCart as $cart)
                            @include('partials._bar')
                            <div class="flex justify-between items-center my-4 text-black">
                                <div class="text-center w-full flex items-center">
                                    <img src="{{ asset('assets/img/Razor2.png') }}" class="w-20 h-20" alt="">
                                    <div class="ml-3 flex flex-col w-full">
                                        <p class="text-F font-medium">
                                            {{ $items->where('id', $cart->item_id)->first()->category->name }}</p>
                                        <p class="font-bold">{{ $items->where('id', $cart->item_id)->first()->name }}</p>
                                    </div>
                                </div>
                                <div class="text-center w-full flex justify-center items-center">
                                    <button class="text-S font-bold text-2xl">
                                        <img src="{{ asset('assets/svg/minus.svg') }}" class="w-6 h-full"></button>
                                    <input type="text" class="bg-transparent outline-none font-bold text-center w-11 mx-1"
                                        size="1" value="{{ $cart->quantity }}">
                                    <button class="text-S">
                                        <img src="{{ asset('assets/svg/plus.svg') }}" class="w-6"></button>
                                </div>
                                <div class="text-center w-full flex justify-center items-center">
                                    <p class="font-bold">${{ $cart->totalPrice }}</p>
                                </div>
                                <div class="text-center w-full flex justify-center items-center">
                                    <button onclick="deleteItemCart({{$cart->item_id}})"><img class="w-10 h-10 mx-auto"
                                            src="{{ asset('assets/svg/Delete.svg') }}"></button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                <div class="flex w-full h-full justify-center items-center">
                    <p class="text-center p-5 font-bold text-red-600 text-xl">Your Cart Is Empty.</p>
                </div>
                @endif
            </div>
            <div class="bg-F rounded-r-2xl p-5 w-4/12 h-3/4 mt-10">
                <div>
                    <h1 class="text-white font-bold text-2xl">Summary</h1>
                </div>
                @include('partials._bar')
                <div class="flex font-bold text-lg justify-between mt-3">
                    <p>ITEMS {{ Auth::user()->cart()->count() }}</p>
                    <p>$ 132.00</p>
                </div>
                <div class="flex flex-col mt-7">
                    <label for="" class="text-lg font-medium text-gray-200 mb-3">Shipping</label>
                    <select name="shipping" id="" class="p-2 outline-none font-medium mb-5">
                        <option value="fastShip">Fast Shipping (+ $10.00)</option>
                        <option value="regShip">Regular Shipping (+ $5.00)</option>
                    </select>
                    <label for="discount" class="text-lg font-medium text-gray-200 mb-3">Discount Code</label>
                    <input type="text" name="disCode" placeholder="Enter your code" class="p-2">
                </div>
                @include('partials._bar')
                <div class="flex font-bold text-lg justify-between mt-3">
                    <p>Total Price</p>
                    <p>$ 142.00</p>
                </div>

                <button class="font-bold p-3 w-full bg-white text-F text-lg rounded-xl mt-10">CHECKOUT</button>
            </div>
        </div>

    @endauth
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection
