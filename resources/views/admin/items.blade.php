@extends('components.layout')
@section('title', 'Admin | Book Now')

@section('content')
    <div class="flex justify-center">
        @include('partials._navAdmin')
    </div>
    <div>
        <a href="/admin/items"></a>
    </div>
    <div>
        <div class="bg-P border-2 rounded-2xl border-S w-11/12 m-10">
            <div class="text-white flex justify-between ">
                <div class="text-center border-r-2 border-b-2 border-S text-center w-full">
                    Item Id
                </div>
                <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                    Item name
                </div>
                <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                    Item Category
                </div>
                <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                    Item Quantity
                </div>
                <div class="text-center border-r-2  border-b-2 border-S text-center w-full">
                    Item Price
                </div>
                <div class="text-center  border-b-2 border-S w-full">
                    Edit
                </div>
            </div>
            @if ($items->count() > 0)
                <div class="flex justify-between w-full flex-col">
                    @foreach ($items as $item)
                        <div class="flex justify-between my-4 text-white">
                            <div class="text-center w-full">
                                <p>{{ $item->id }}</p>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $item->name }}</p>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $item->category_id }}</p>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $item->quantity }}</p>
                            </div>
                            <div class="text-center w-full">
                                <p>{{ $item->price }}</p>
                            </div>
                            <div class="text-center w-full flex justify-center">
                                <img src="{{ asset('assets/svg/Edit.svg') }}" class="w-8">
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection
