<!-- resources/views/home.blade.php -->

@extends('components.layout')

@section('title', 'Cart')

@section('content')
    @auth
        <x-userCartId />
        <div class="bg-P border-2 rounded-2xl border-S w-11/12  p-5">
            <div class="flex justify-between align-center mt-5">
                <img src="{{ asset('/assets/img/G1.jpeg') }}" class="w-200p h-1/12 rounded-xl" alt="">
                <div class="ml-3 flex flex-col justify-center">
                    <p class="text-white font-medium">Gell Douche HairStyle 300ml</p>
                    <p>Signle Item Price: $99.00</p>
                </div>
                <div class="">
                    @include('partials._quantity')
                </div>
                <p>$890.00</p>
                <div>
                    <button>
                        <img src="{{ asset('/assets/svg/Delete.svg') }}" alt="" class="w-soc">
                    </button>
                </div>
            </div>
            
        </div>
    @endauth
@endsection
