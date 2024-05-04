<div class="bg-P w-full h-auto p-7 mt-5 gallery">
    <h1 class="text-2xl text-S font-bold">Gallery</h1>
    <div class="flex ml-10 mt-5">
        <div class="flex flex-col">
            <div class="flex">
                <img src="{{asset('/assets/img/G1.jpeg')}}" class="m-2.5 w-SImg h-SImg" alt="">
                <img src="{{asset('/assets/img/G2.jpeg')}}" class="m-2.5 w-SImg h-SImg" alt="">
            </div>
            <div>
                <img src="{{asset('/assets/img/G3.jpeg')}}" class="m-2.5 w-LImg h-SImg" alt="">
            </div>
        </div>
        <div>
            <img src="{{asset('/assets/img/G4.jpeg')}}" class="m-2.5 w-SImg h-LImg" alt="">
        </div>
        <div>
            <img src="{{asset('/assets/img/G5.jpeg')}}" class="m-2.5 w-LImg h-LImg" alt="">
        </div>
    </div>

    <div class="p-3 border-S border-4 rounded-2xl gtxt">
        <h2 class="text-3xl text-S font-bold ">Explore our captivating gallery showcasing the artistry and precision of our skilled barbers.</h2>
    </div>

    <div class="flex ml-10 mt-5">
        <div>
            <img src="{{asset('/assets/img/G5.jpeg')}}" class="m-2.5 w-LImg h-LImg" alt="">
        </div>
        <div class="flex flex-col">
            <div>
                <img src="{{asset('/assets/img/G3.jpeg')}}" class="m-2.5 w-LImg h-SImg" alt="">
            </div>
            <div class="flex">
                <img src="{{asset('/assets/img/G1.jpeg')}}" class="m-2.5 w-SImg h-SImg" alt="">
                <img src="{{asset('/assets/img/G2.jpeg')}}" class="m-2.5 w-SImg h-SImg" alt="">
            </div>
        </div>
        <div>
            <img src="{{asset('/assets/img/G4.jpeg')}}" class="m-2.5 w-SImg h-LImg" alt="">
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