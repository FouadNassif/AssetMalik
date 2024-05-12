@extends('components.layout')

@section('title', 'Cart')

@section('content')
    @auth
        <div class="w-11/12 flex justify-center align-center">
            <div class="bg-white w-full">
                <div class="flex justify-between mx-5">
                    <h1 class="font-bold text-xl">Shopping Cart</h1>
                    <p>{{ Auth::user()->cart()->count() }} Items</p>
                </div>
                @foreach ($allCart as $cart)
                    @include('partials._bar')
                    <div class="p-5 overflow-y-auto">
                        <div class="flex justify-between align-center">
                            <div class="flex">
                                <img src="{{ asset('assets/img/Razor2.png') }}" class="w-100p" alt="">
                                <div class="mt-3 flex-col">
                                    <p class="text-F font-medium">Machine</p>
                                    <p class="font-bold">{{ $items->where('id', $cart->item_id)->first()->name }}</p>
                                </div>
                            </div>
                            <div>
                                <button class="bg-S font-bold">-</button>
                                <input type="text" class="bg-gray-300 outline-none font-bol text-center"
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
    @endauth
@endsection
