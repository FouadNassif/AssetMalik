@extends('components.layout')

@section('title', 'Book Now')

@section('content')
    <div class="flex justify-center align-center margin-auto ">
        <div class="bg-P w-3/4 border-2 border-S p-5 ">
            @foreach ($Clients as $client)
                <div class="flex justify-between mb-4 text-center">
                    <div class="flex flex-col">
                        <h2 class="text-white font-bold text-xl mb-5">Client Name</h2>
                        <p>{{ $client->name }}</p>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-white font-bold text-xl mb-5">Date</h2>
                        <p>{{ $client->date }}</p>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-white font-bold text-xl mb-5">Time</h2>
                        <p>{{ $client->time }}</p>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-white font-bold text-xl mb-5">Message</h2>
                        <p>{{ $client->message }}</p>
                    </div>
                    <div class="flex flex-col">
                        <h2 class="text-white font-bold text-xl mb-5">Edit</h2>
                    </div>
                </div>
            @endforeach
            <div class="flex flex-col">
                <h2 class="text-white font-bold text-xl mb-5">Edit</h2>
            </div>
        </div>
    </div>
@endsection
