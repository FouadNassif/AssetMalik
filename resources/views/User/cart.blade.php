@extends('components.layout')

@section('title', 'Cart')

@section('content')
    @auth
        <div class="w-11/12 mx-auto flex">
            <div class="bg-white w-full h-3/4 p-5 overflow-y-auto">
                <div class="flex justify-between mx-5">
                    <h1 class="font-bold text-xl">Shopping Cart</h1>
                    <p>{{ Auth::user()->cart()->count() }} Items</p>
                </div>
                <div class="items-container">
                    @foreach ($allCart as $cart)
                        @include('partials._bar')
                        <div class="p-5">
                            <div class="flex justify-between align-center">
                                <div class="flex">
                                    <img src="{{ asset('assets/img/Razor2.png') }}" class="w-100p" alt="">
                                    <div class="mt-3 flex-col">
                                        <p class="text-F font-medium">{{ $items->where('id', $cart->item_id)->first()->category->name }}</p>
                                        <p class="font-bold">{{ $items->where('id', $cart->item_id)->first()->name }}</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <button class="bg-S font-bold">-</button>
                                    <input type="text" class="bg-gray-300 outline-none font-bold text-center h-10 w-16 mx-2"
                                        value="{{ $cart->quantity }}">
                                    <button class="bg-S">+</button>
                                </div>
                                <div class="flex flex-col justify-center">
                                    <p>${{ $cart->totalPrice }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endauth
@endsection
