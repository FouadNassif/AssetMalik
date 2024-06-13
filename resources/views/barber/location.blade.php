@extends('components.BlankPage')
@section('title', ' Location | Asset Malik')

@section('content')
    @include('partials._navbar')
    <div class="bg-white flex">
        <div class="p-5">
            <div class="flex align-center items-center">
                <img src="{{ asset('assets/svg/location.svg') }}" class="w-8">
                <p>Rachiine - Zgharta, North Lebanon, Main Road</p>
            </div>
            <div class=" mt-5 border-2 border-black rounded-xl flex flex-col justify-center items-center p-2">
                <img src="{{ asset('assets/svg/open.svg') }}" class="w-20 relative -top-5">
                <p>From Tuesday Till Friday</p>
                <p>10:00am - 08:00pm</p>
                <p class="mt-5">Saturday and Sunday</p>
                <p>09:00am - 10:00pm</p>
                <p></p>
            </div>
        </div>
        <iframe class="w-full"
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d216605.363210254!2d35.71828401983134!3d34.44686630241345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2slb!4v1717845190629!5m2!1sen!2slb"
            height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
@endsection
