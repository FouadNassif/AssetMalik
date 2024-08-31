<div class="bg-P w-full h-auto flex p-7 relative justify-between">
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

<style>
    .imgcon {
        background-color: #71550fb2;
    }

    .imgcon img {
        opacity: 0.3;
    }
</style>
