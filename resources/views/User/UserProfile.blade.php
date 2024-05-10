@extends('components.layout')

@section('title', 'Profile')

@section('content')
    @auth
        <x-userCartId />
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
                                    <img class="w-10 h-10 mx-auto" src="{{ asset('assets/svg/ThreeDots.svg') }}" alt="">
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
            <div class="bg-P border-2 border-S rounded-2xl w-11/12 mt-5 flex flex-wrap">
                @if (count($favoriteItems) > 0)
                    @foreach ($favoriteItems as $item)
                        <x-item-card :item="$item" />
                    @endforeach
                    @foreach ($favoriteItemsId as $itemId)
                        <script>
                            document.getElementById(`favoriteImg_{{ $itemId }}`).src = "{{ asset('assets/svg/Favorites.svg') }}";
                        </script>
                    @endforeach
                @else
                    <h1 class="text-center text-red-600 text-xl font-bold m-5">No Favorites Items</h1>
                @endif
            </div>
        </div>
        <div class="flex justify-center">
            <div class="bg-P border-2 border-S rounded-2xl w-11/12 mt-5 flex flex-wrap justify-center p-3">
                @if (count($favoriteItems) > 0)
                    @foreach ($itemReviews as $review)
                        <x-review :user="$review->user" :review="$review->review" :date="$review->created_at" />
                    @endforeach
                @else
                    <h1 class="text-center text-red-600 text-xl font-bold m-5">No Reviews Added</h1>
                @endif
            </div>
        </div>
    @endauth
@endsection
