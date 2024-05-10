<!-- store/searched.blade.php -->

@extends('components.layout')

@section('title', 'Search Results')

@section('content')
    @include('partials._search')
    <div class="flex flex-wrap p-5">
        @if (count($data) > 0)
            @foreach ($data as $item)
                <button class="bg-transparent border border-S w-80 p-2 m-5 text-left rounded-2xl text-white"
                    onclick="showDesItem({{ $item['id'] }})">
                    <img src="{{ asset('assets/img/Razor2.png') }}" alt=""
                        class="w-fit h-200p rounded-t-2xl ml-12"><br>
                    <h2 class="font-medium text-xl text-center">{{ $item['name'] }}</h2><br>
                    <p class="font-bold text-center mb-3">$<span class="font-medium">{{ $item['price'] }}</span></p>
                </button>
            @endforeach
        @else
            <h1 class="text-red-600 text-center w-full">No items Found!!</h1>
        @endif
    </div>
@endsection

<script>
    function showDesItem(id) {
        document.getElementById('itemDes').style.display = 'block';
        const quantityInput = document.getElementById('quantity').value = 0;

        const url = '/api/getItem';
        fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content')
                },
                body: JSON.stringify({
                    item_id: id,
                })
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();

            })
            .then(data => {
                let itemData = [];
                for (let i of data.item) {
                    itemData.push(i);
                }
                let item = itemData[0]
                console.log(item.name)
                document.getElementById("item_name").textContent = item.name
                document.getElementById("item_des").textContent = item.description
                document.getElementById("item_price").textContent = item.price
                document.getElementById("item_quan").textContent = item.quantity
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    }

    function closeItemDes() {
        document.getElementById('itemDes').style.display = 'none'
    }



    function increment() {
        const quantityInput = document.getElementById('quantity');
        const quantityValue = document.getElementById("item_quan");
        if (parseInt(quantityValue.textContent) > quantityInput.value) {
            console.log(quantityValue.textContent, quantityInput.value)
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }
    }

    function decrement() {
        const quantityInput = document.getElementById('quantity');
        var currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 0) {

            quantityInput.value = currentQuantity - 1;
        }
    }
</script>
