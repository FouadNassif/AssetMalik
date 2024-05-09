@props(['item'])

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