@extends('components.BlankPage')
@section('title', 'Contact Us')

@section('content')
    @include('partials._navbar')
    <div class="relative h-screen">
        <div class="relative h-2/4 w-full">
            <img src="{{ asset('assets/img/Footer.jpg') }}" class="absolute top-0 left-0 h-full w-full object-cover">
            <div class="absolute top-0 left-0 h-full w-full bg-S bg-opacity-40 flex flex-col items-center justify-center">
                <h1 class="text-white text-4xl font-bold">Get in touch</h1>
                <p class="text-white text-xl mt-4">Want to get in touch? We'd love to hear from you. Here's how you can reach
                    us...</p>
            </div>
        </div>
        <div class="flex justify-between">
            <div></div>
            <div
                class="w-4/12 bg-white text-center flex-col flex  items-center p-5 relative -top-20 rounded-lg">
                <img src="{{ asset('assets/svg/Phone.svg') }}" class="w-12">
                <h1 class="font-bold text-2xl mt-5">Talk to us</h1>
                <p class="mt-5">Need a fresh cut or have questions about our services? <br>Call us at</p>
                <a href="tel:+96171339879" class="text-blue-700 my-10">+961 71 339 879</a>
                <div class="flex justify-between w-2/4">
                    <a href=""><img src="{{ asset('assets/svg/tiktok.svg') }}" class="w-8"></a>
                    <a href=""><img src="{{ asset('assets/svg/facebook.svg') }}" class="w-8"></a>
                    <a href=""><img src="{{ asset('assets/svg/instagram.svg') }}" class="w-8"></a>
                    <a href=""><img src="{{ asset('assets/svg/twitter.svg') }}" class="w-8"></a>
                    <a href=""><img src="{{ asset('assets/svg/youtube.svg') }}" class="w-8"></a>
                </div>
            </div>
            <div
                class="w-4/12 bg-white text-center flex-col flex justify-center items-center p-5 relative -top-20 rounded-lg">
                <img src="{{ asset('assets/svg/Email.svg') }}" class="w-12">
                <h1 class="font-bold text-2xl mt-5">Let's stay in touch</h1>
                <p class="mt-5">For appointments, inquiries, or feedback.<br>Drop us an email</p>
                <div class="text-justify w-3/4 flex flex-col mt-5 justify-center items-center">
                    <div class="flex">
                        <div class="mr-5">
                            <label for="name">First Name*</label> <br>
                            <input type="text" name="name" class="bg-gray-300 w-full p-2 outline-none">
                        </div>
                        <div>
                            <label for="name">Last Name</label> <br>
                            <input type="text" name="name" class="bg-gray-300 w-full p-2 outline-none">
                        </div>
                    </div>
                    <div class="w-full mt-3">
                        <label for="email" class="mt-3 -mb-5">Email*</label> <br>
                        <input type="email" name="email" class="bg-gray-300 w-full p-2 outline-none mb-3">

                        <label for="message" class=" -mb-5">Message*</label> <br>
                        <textarea type="text" name="message" rows="4" class="bg-gray-300 w-full p-2 outline-none"></textarea>
                    </div>
                    <button class="bg-P p-3 px-5 mt-5 text-white font-bold w-fit rounded-xl">Send</button>
                </div>

            </div>
            <div></div>
        </div>
    </div>
@endsection
