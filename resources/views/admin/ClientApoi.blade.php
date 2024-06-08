@extends('components.layout')
@section('title', 'Admin | Book Now')

@section('content')
    <div class="flex justify-center">
        @include('partials._navAdmin')
    </div>

    <div class="flex flex-col justify-center mt-5">
        <div class="bg-P border-2 rounded-2xl border-S w-11/12 m-10">
            <x-topRowTable />
            @if ($PendingApointments->count() > 0)
                <div class="flex justify-between w-full flex-col">
                    @foreach ($PendingApointments as $appointment)
                        @if ($appointment->status == 'pending')
                            <div class="flex justify-between my-4 text-white">
                                <x-tableData :data="$appointment->id" />
                                <x-tableData :data="$appointment->date" />
                                <x-tableData :data="$appointment->time" />
                                <x-tableData :data="$appointment->name" />
                                <x-tableData :data="$appointment->workerName" />
                                <div class="text-center w-full">
                                    <select name="status" id="staUpdts" class="text-black font-bold"
                                        onchange="changeApoiStatus(this)" data-userName="{{ $appointment->name }}"
                                        data-time="{{ $appointment->time }}" data-date="{{ $appointment->date }}">
                                        <option value="pending">{{ $appointment->status }}</option>
                                        <option value="ongoing">Ongoing</option>
                                        <option value="done">Done</option>
                                    </select>
                                </div>
                                <x-tableData :data="$appointment->message" />
                                <div class="text-center w-full flex">
                                    <button onclick="deleteApoi(this)" data-userName="{{ $appointment->name }}"
                                        data-time="{{ $appointment->time }}" data-date="{{ $appointment->date }}">
                                        <img class="w-10h-10 mx-auto" src="{{ asset('assets/svg/Delete.svg') }}">
                                    </button>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                {{ $PendingApointments->links('pagination::bootstrap-4') }}
            @else
                <p class="text-center p-5 font-bold text-red-600">No appointments found.</p>
            @endif
        </div>

        <div class="bg-P border-2 rounded-2xl border-S w-11/12 m-10">
            <x-topRowTable />
            @if ($OngoingApointments->count() > 0)
                <div class="flex justify-between w-full flex-col">
                    @foreach ($OngoingApointments as $appointment)
                        <div class="flex justify-between my-4 text-white">
                            <x-tableData :data="$appointment->id" />
                            <x-tableData :data="$appointment->date" />
                            <x-tableData :data="$appointment->time" />
                            <x-tableData :data="$appointment->name" />
                            <x-tableData :data="$appointment->workerName" />
                            <div class="text-center w-full">
                                <select name="status" id="staUpdts" class="text-black font-bold"
                                    onchange="changeApoiStatus(this)" data-userName="{{ $appointment->name }}"
                                    data-time="{{ $appointment->time }}" data-date="{{ $appointment->date }}">
                                    <option value="pending">{{ $appointment->status }}</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="done">Done</option>
                                </select>
                            </div>
                            <x-tableData :data="$appointment->message" />
                            <div class="text-center w-full flex">
                                <button onclick="deleteApoi(this)" data-userName="{{ $appointment->name }}"
                                    data-time="{{ $appointment->time }}" data-date="{{ $appointment->date }}">
                                    <img class="w-10h-10 mx-auto" src="{{ asset('assets/svg/Delete.svg') }}">
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $OngoingApointments->links('pagination::bootstrap-4') }}
            @else
                <p class="text-center p-5 font-bold text-red-600">No appointments found.</p>
            @endif
        </div>

        <div class="bg-P border-2 rounded-2xl border-S w-11/12 m-10">
            <x-topRowTable />
            @if ($FinishedApointments->count() > 0)
                <div class="flex justify-between w-full flex-col">
                    @foreach ($FinishedApointments as $appointment)
                        <div class="flex justify-between my-4 text-white">
                            <x-tableData :data="$appointment->id" />
                            <x-tableData :data="$appointment->date" />
                            <x-tableData :data="$appointment->time" />
                            <x-tableData :data="$appointment->name" />
                            <x-tableData :data="$appointment->workerName" />
                            <div class="text-center w-full">
                                <select name="status" id="staUpdts" class="text-black font-bold"
                                    onchange="changeApoiStatus(this)" data-userName="{{ $appointment->name }}"
                                    data-time="{{ $appointment->time }}" data-date="{{ $appointment->date }}">
                                    <option value="pending">{{ $appointment->status }}</option>
                                    <option value="ongoing">Ongoing</option>
                                    <option value="done">Done</option>
                                </select>
                            </div>
                            <x-tableData :data="$appointment->message" />
                            <div class="text-center w-full flex">
                                <button onclick="deleteApoi(this)" data-userName="{{ $appointment->name }}"
                                    data-time="{{ $appointment->time }}" data-date="{{ $appointment->date }}">
                                    <img class="w-10h-10 mx-auto" src="{{ asset('assets/svg/Delete.svg') }}">
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $FinishedApointments->links('pagination::bootstrap-4') }}
            @else
                <p class="text-center p-5 font-bold text-red-600">No appointments found.</p>
            @endif
        </div>
    </div>
@endsection
