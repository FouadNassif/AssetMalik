@extends('components.layout')

@section('title', 'Cart')

@section('content')
    @auth
        <x-userCartId />
        <div>
            <div class="w-full flex justify-center">
                <div class="bg-P px-3">
                    @foreach ($allCart as $cart)
                        <div class="bg-PHover flex justify-between p-6 my-3">
                            <div class="mx-5">
                                <img src="{{ asset('/assets/img/G1.jpeg') }}" class="w-200p h-1/12 rounded-xl" alt="">
                            </div>
                            <div class=" mx-5 flex flex-col justify-center w-max-54p">
                                <h1>{{ $items->where('id', $cart->item_id)->first()->name }}</h1>
                            </div>
                            <div class=" mx-5 flex flex-col justify-center">
                                <div class="flex">
                                    <button type="button" onclick="decrement()"><img
                                            src="{{ asset('assets/svg/Minus.svg') }}"class="w-30p h-30p"></button>
                                    <input type="text" name="quantity" value="{{ $cart->quantity }}" id="quantity"
                                        class="h-30p w-soc mx-1 outline-none text-center text-black font-bold">
                                    <button type="button" onclick="increment()"><img src="{{ asset('assets/svg/Plus.svg') }}"
                                            class="w-30p h-30p"></button>
                                </div>
                            </div>
                            <div class="mx-5 flex flex-col justify-center">
                                <p>{{ $cart->totalPrice }}</p>
                            </div>
                            <div class="flex flex-col justify-center w-soc">
                                <img src="{{ asset('assets/svg/Delete.svg') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-full flex justify-center text-center">
                <button class="bg-S rounded-2xl font-bold text-P text-xl p-2">Proceed</button>
            </div>
        </div>
    @endauth
@endsection
