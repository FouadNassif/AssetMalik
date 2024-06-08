<!-- resources/views/home.blade.php -->

@extends('components.layout')

@section('title', 'Book Now')

@section('content')
    <div class="flex justify-center mt-10">
        <form action="/BookNowCheck" method="POST" class="border-S border-4 rounded-2xl bg-P w-9/12 h-auto p-7">
            @csrf
            <div class="">
                <h1 class="text-center text-S text-xl font-bold">Book Now</h1>
                <div class="mt-5">
                    <label for="name" class="text-white font-medium">Name</label>
                    @error('name')
                        <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                    @enderror <br>
                    @auth
                        <input type="text"
                            class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white" name="name"
                            value="{{ auth()->user()->name }}">
                    @else
                        <input type="text"
                            class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white" name="name"
                            value="{{ old('name') }}">
                    @endauth
                </div>

                <div class="mt-5">
                    <label for="phoneNumber" class="text-white font-medium">Phone Number</label>
                    @error('phoneNumber')
                        <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                    @enderror <br>
                    @auth
                        <input type="number"
                            class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white"
                            name="phoneNumber" value="{{ auth()->user()->phoneNumber }}">
                    @else
                        <input type="number"
                            class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white"
                            name="phoneNumber" value="{{ old('phoneNumber') }}">
                    @endauth
                </div>

                <div class="flex justify-between w-full text-center">
                    <div class="mt-5 w-2/5 flex flex-col">
                        <label for="date" class="text-white font-medium">Date</label>
                        @error('date')
                            <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                        @enderror <br>
                        <input type="text" id="calendar-input" name="date" value="{{ old('date') }}">
                    </div>

                    <div class="mt-5 w-2/4 flex flex-col">
                        <label for="time" class="text-white font-medium">Time</label>
                        @error('time')
                            <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                        @enderror <br>
                        <input type="time" readonly id="inptime" name="time">
                        <div id="timeInputcon" class="mt-3 flex-wrap w-full flex justify-center">
                        </div>
                    </div>
                </div>

                <div class="mt-5 flex flex-wrap" id="wcon">
                    <input type="text" value="" name="workerName" id="WN" hidden>
                    @if ($workers->count() > 0)
                        @foreach ($workers as $worker)
                            <button type="button" value="{{ $worker->name }}" onclick="addWorker(this)"
                                class="border-S rounded-2xl border-2 w-20 p-4 mr-5 mb-5 cursor-pointer z-0 hover:bg-PHover">
                                <img src="{{ asset('assets/img/G1.jpeg') }}"  class="w-fit h-40 rounded-t-xl">
                                <h2>{{ $worker->name }}</h2>
                                <p>Bio: {{ $worker->bio }}</p>
                                </butotn>
                        @endforeach
                    @endif
                </div>
                <div>
                    <div class="mt-5">
                        <label for="message" class="text-white font-medium">Leave A Message (Optimal)</label>
                        @error('message')
                            <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                        @enderror <br>
                        <textarea name="message"
                            class="w-full text-white bg-transparent outline-0 cursor-pointer mt-4 border-2 border-white p-2" cols="30"
                            rows="5"></textarea>
                    </div>
                </div>

                <div class="flex justify-center mt-5">
                    <button type="submit" class="border-2 border-S p-1 font-bold text-S mr-3">Submit</button>
                    <button type="reset" class="bg-S text-P p-1 font-bold ">Cancel</button>
                </div>
            </div>
        </form>
    </div>
    <script src="{{asset('assets/js/BookNow.js')}}"></script>
@endsection
