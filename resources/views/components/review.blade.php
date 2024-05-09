@props(['userName', 'review', 'date'])


<div class="bg-white w-5/12 p-2 rounded-xl m-2">
    <div class="flex justify-between">
        <p class="font-bold">{{ $userName }}</p>
        <p class="text-gray">{{$date}}</p>
    </div>
    <p class="font-medium ml-2">{{ $review }}</p>
</div>
