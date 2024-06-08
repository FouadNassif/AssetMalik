<!-- resources/views/home.blade.php -->

@extends('components.layout')

@section('title', 'Asset Malik')

@section('content')
    @include('partials._Message')
    
    {{-- Hero --}}
    <div class="bottom-20 relative flex flex-col justify-center items-center w-full h-screen text-center text-S ">
        <img src="{{ asset('assets/img/Footer.jpg') }}" alt="" class="absolute inset-0 w-full h-full object-cover z-0">
        <div class="relative z-50 leading-loose">
            <p class="font-Lit text-5xl">HABIBI</p>
            <h1 class="text-7xl scale-y-150 mb-5 mt-3 font-black">A S S E T M A L I K</h1>
            <p class=" mb-3 font-Lit text-5xl">TCHRAB CHI?</p>
            @include('partials._BNButton')
        </div>
    </div>

    {{-- Section under the Hero --}}
    <div class="bg-P w-full h-auto flex p-7 relative justify-between bapCon">
        <div class="">
            <h1 class="text-S text-2xl font-bold mb-5">BOOK AN APPOINTMENT</h1>
            <p class="text-white text-xl font-bold leading-8">We have seven barbershops between: <br>
                Toronto, Collingwood, Hamilton, Ottawa, Vancouver and Hawaii. <br>
                Click on the location you wish to make an appointment for.</p>
        </div>
        <div class="relative imgcon">
            <img class="w-85 h-64 fy" src="{{ asset('assets/img/street-signs-green-signs-location.jpg') }}" alt="">
            <div
                class="text-S text-xl absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-full">
                <h3 class="font-bold mb-7">RACHIINE ZGHARTA <br>NORTH LEBANON</h3>
                <p class="-mt-5 mb-5">1st Building ST EAST RUE 45</p> 
                @include('partials._BNButton')
            </div>
        </div>
    </div>

    {{-- Branches --}}
    <div class="bg-P w-full h-auto mt-5 flex flex-wrap p-7">
        <h1 class="text-S font-bold text-2xl">Branches</h1>
        <div class="flex flex-wrap mar">
            <?php
            $data = [['Rachiine Zgharta', '1st Buildind ST EAST 405 RUE'], ['Jbeil Beirut ', '1st House ST EAST 345 RUE'], ['Ehden Zgharta North Lebanon', 'Next To Fouad Nassif House'], ['Jbeil Beirut ', '1st House ST EAST 345 RUE'], ['Rachiine Zgharta', '1st Buildind ST EAST 405 RUE'], ['Ehden Zgharta North Lebanon', 'Next To Fouad Nassif House']];
            
            for ($i = 0; $i < count($data); $i++) {
                echo "<div class='relative mx-10 my-10 imgcon'>
                                <img src='" .
                    asset('assets/img/B' . ($i + 1) . '.jpeg') .
                    "' alt='' class='w-BrCard h-BrCard'>
                                <div class='text-S absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center w-full'>
                                    <h1 class='text-4xl mb-7 font-medium'>" .
                    $data[$i][0] .
                    "</h1>
                                    <p class='text-base -mt-5 mb-5'>" .
                    $data[$i][1] .
                    "</p> 
                                    <a href='' class= 'font-black border-4 border-S bg-S text-P px-4 py-1 hover:bg-HS hover:border-HS '>BookNow</a>
                                </div>
                            </div>";
            }
            ?>
        </div>
    </div>

    {{-- Gallery --}}

    <div class="bg-P w-full h-auto p-7 mt-5 gallery">
        <a class="text-2xl text-S font-bold" href="/gallery">Gallery ></a>
        <div class="flex ml-10 mt-5">
            <div class="flex flex-col">
                <div class="flex">
                    <img src="{{ asset('/assets/img/G1.jpeg') }}" class="m-2.5 w-SImg h-SImg" alt="">
                    <img src="{{ asset('/assets/img/G2.jpeg') }}" class="m-2.5 w-SImg h-SImg" alt="">
                </div>
                <div>
                    <img src="{{ asset('/assets/img/G3.jpeg') }}" class="m-2.5 w-LImg h-SImg" alt="">
                </div>
            </div>
            <div>
                <img src="{{ asset('/assets/img/G4.jpeg') }}" class="m-2.5 w-SImg h-LImg" alt="">
            </div>
            <div>
                <img src="{{ asset('/assets/img/G5.jpeg') }}" class="m-2.5 w-LImg h-LImg" alt="">
            </div>
        </div>

        <div class="p-3 border-S border-4 rounded-2xl gtxt">
            <h2 class="text-3xl text-S font-bold ">Explore our captivating gallery showcasing the artistry and precision of
                our skilled barbers.</h2>
        </div>

        <div class="flex ml-10 mt-5">
            <div>
                <img src="{{ asset('/assets/img/G5.jpeg') }}" class="m-2.5 w-LImg h-LImg" alt="">
            </div>
            <div class="flex flex-col">
                <div>
                    <img src="{{ asset('/assets/img/G3.jpeg') }}" class="m-2.5 w-LImg h-SImg" alt="">
                </div>
                <div class="flex">
                    <img src="{{ asset('/assets/img/G1.jpeg') }}" class="m-2.5 w-SImg h-SImg" alt="">
                    <img src="{{ asset('/assets/img/G2.jpeg') }}" class="m-2.5 w-SImg h-SImg" alt="">
                </div>
            </div>
            <div>
                <img src="{{ asset('/assets/img/G4.jpeg') }}" class="m-2.5 w-SImg h-LImg" alt="">
            </div>
        </div>
    </div>

    <style>
        .gallery img {
            margin: 10px;
        }

        .gtxt {
            width: fit-content;
            margin-left: 4%;
        }
    </style>
    @include('partials._NewsLetter')
@endsection
