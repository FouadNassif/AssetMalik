@extends('components.layout')
@section('title', 'Admin | Book Now')

@section('content')
<div class="flex justify-center">
    @include('partials._navAdmin')
</div>

    <div class="flex justify-center mt-5">
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
                    User Name
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
            @if ($appointments->count() > 0)
                <div class="flex justify-between w-full flex-col">
                    @foreach ($appointments as $appointment)
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
                                <p>{{ $appointment->name }}f</p>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $appointment->workerName }}f</p>
                            </div>
                            <div class="text-center w-full">
                                <select name="status" id="staUpdts" class="text-black font-bold">
                                    <option value="">{{ $appointment->status }}</option>
                                    <option value="">Ongoing</option>
                                    <option value="">Done</option>
                                </select>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $appointment->message }}</p>
                            </div>
                            <div class="text-center w-full flex">
                                <img class="w-10 h-10 mx-auto" src="{{ asset('assets/svg/Delete.svg') }}" alt="">
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center p-5 font-bold text-red-600">No appointments found.</p>
            @endif
        </div>
    </div>
@endsection