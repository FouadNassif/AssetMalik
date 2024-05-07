@extends('components.layout')

@section('title', 'Profile')

@section('content')
    @auth
        <div class="flex justify-center mb-5">
            <div class="bg-P border-2 border-S rounded-2xl w-fit flex p-4 ">
                <img src="{{ asset('assets/img/G1.jpeg') }}" alt="" class="w-40 h-40 rounded-full">
                <div class="text-white ml-3">
                    <p class="font-bold">Name: <span class="font-thin">{{ auth()->user()->name }}</span></p> <br>
                    <p class="font-bold">ID: <span class="font-thin">{{ auth()->user()->id }}</span></p> <br>
                    <p class="font-bold">Phone Number: <span class="font-thin">{{ auth()->user()->phoneNumber }}</span></p> <br>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="bg-P border-2 rounded-2xl border-S w-11/12">
                <div class="text-white flex justify-between ">
                    <div class="text-center border-r-2 border-b-2 border-S text-center w-full">
                        Appointment ID
                    </div>
                    <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                        Date
                    </div>
                    <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                        Time
                    </div>
                    <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                        Worker Name
                    </div>
                    <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                        Status
                    </div>
                    <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                        Message
                    </div>
                    <div class="text-center text-center  border-b-2 border-S w-full">
                        Edit
                    </div>
                </div>
                @if ($userAppointments->count() > 0)
                    <div class="flex justify-between w-full flex-col">
                        @foreach ($userAppointments as $appointment)
                            <div class="flex justify-between my-4 text-white">
                                <div class="text-center w-full">
                                    <p>{{ $appointment->id }}</p>
                                </div>
                                <div class="text-center w-full">
                                    <p>{{ $appointment->date }}</p>
                                </div>
                                <div class="text-center w-full">
                                    <p>{{ $appointment->time }}</p>
                                </div>
                                <div class="text-center w-full">
                                    <p>Fouad Nassif</p>
                                </div>
                                <div class="text-center w-full">
                                    <p>{{ $appointment->status }}</p>
                                </div>
                                <div class="text-center w-full">
                                    <p>{{ $appointment->message }}</p>
                                </div>
                                <div class="text-center w-full flex">
                                    <img class="w-10 h-10 mx-auto" src="{{ asset('assets/svg/Delete.svg') }}" alt="">
                                    <img class="w-10 h-10 mx-auto" src="{{ asset('assets/svg/Edit.svg') }}" alt="">
                                    <img class="w-10 h-10 mx-auto" src="{{ asset('assets/svg/ThreeDots.svg') }}"
                                        alt="">
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-center p-5 font-bold text-red-600">No appointments found.</p>
                @endif
            </div>
        </div>
        <div class="flex justify-center">
            <div class="bg-P border-2 border-S rounded-2xl w-11/12 mt-5">
                @if (count($favoriteItems) > 0)
                    @foreach ($favoriteItems as $item)
                        <x-item-card :item="$item" />
                    @endforeach
                @else
                    <h1 class="text-center text-red-600 text-xl font-bold m-5">No Favorites Items</h1>
                @endif
            </div>
        </div>
    @endauth
@endsection
