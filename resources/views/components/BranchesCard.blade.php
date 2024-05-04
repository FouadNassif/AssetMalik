@props(['branches'])
<x-card>
    <div class="relative mx-10 my-10">
        <img src="{{ asset('assets/img/{{$imgName}}.jpeg') }}" alt="" class="w-BrCard h-BrCard">
        <div class="text-S absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-full">
            <h1 class="text-4xl mb-7 font-medium">{{ $branchName }}</h1>
            <p class="text-base -mt-5 mb-5">{{ $address }}</p>
            @include('partials._BNButton')
        </div>
    </div>
</x-card>
