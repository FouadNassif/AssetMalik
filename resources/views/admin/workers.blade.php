@extends('components.layout')
@section('title', 'Admin | Book Now')

@section('content')
    <div class="flex justify-center">
        @include('partials._navAdmin')
    </div>
    <div>
        <div class="bg-P border-2 rounded-2xl border-S w-11/12 m-10">
            <div class="text-white flex justify-between ">
                <div class="text-center border-r-2 border-b-2 border-S text-center w-full">
                    Worker Id
                </div>
                <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                    Worker name
                </div>
                <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                    Worker Bio
                </div>
                <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                    Worker Experience
                </div>
                <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                    Hired Time
                </div>
                <div class="text-center  border-b-2 border-S w-full">
                    Edit
                </div>
            </div>
            @if ($workers->count() > 0)
                <div class="flex justify-between w-full flex-col">
                    @foreach ($workers as $worker)
                        <div class="flex justify-between my-4 text-white">
                            <div class="text-center w-full">
                                <p>{{ $worker->id }}</p>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $worker->name }}</p>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $worker->bio }}</p>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $worker->experience }}</p>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $worker->created_at }}</p>
                            </div>
                            <div class="text-center w-full">
                                <p><img src="{{ asset('assets/svg/Edit.svg') }}" alt=""></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
