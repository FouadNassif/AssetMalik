<!-- resources/views/home.blade.php -->

@extends('components.layout')

@section('title', 'Store')

@section('content')
    @include('partials._search')
    <div class="flex flex-wrap p-5">
        @foreach ($items as $item)
            <button class="bg-transparent border  border-S w-80 p-2 m-5 text-left rounded-2xl text-White"
                onclick="showDesItem({{ $item->id }})">
                <img src="{{ asset('assets/img/Razor2.png') }}" alt="" class="w-fit h-200p rounded-t-2xl ml-12"><br>
                <h2 class="font-medium text-xl text-center">{{ $item->name }}</h2><br>
                <p class="font-bold text-center mb-3"> $<span class="font-medium">{{ $item->price }}</span>
                </p>
            </button>
        @endforeach
    </div>

    <form action="" method="post">
        <div class="bg-P text-white w-3/4 rounded-2xl fixed top-1/2 left-1/2 transform hidden -translate-x-1/2 -translate-y-1/2 h-auto p-7"
            id="itemDes">
            <button type="button" onclick="closeItemDes()" class="float-right font-bold p-2 -mt-5"><img
                    src="{{ asset('assets/svg/close.svg') }}" class="w-soc h-soc cursor-pointer" alt=""></button>
            <div class="flex mt-5">
                <img src="{{ asset('assets/img/G1.jpeg') }}" alt="" class="w-2/4">
                <div class="ml-5">
                    <h1 class="font-bold text-2xl" id="item_name">Lorem ipsum dolor sit amet.</h1> <br>
                    <h2 id="item_des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente quod beatae, natus
                        iste
                        dolorem dignissimos impedit, sequi nemo rem quaerat possimus! Maiores officiis, ducimus aspernatur
                        repellendus quibusdam accusamus quos deserunt!</h2><br>
                    <p class="font-bold">Price: <span class="font-normal" id="item_price"></span></p><br>
                    <p class="font-bold">Quantity: <span class="font-normal" id="item_quan"></span></p>
                    <div class="flex mt-5">
                        <button type="button" onclick="decrement()"><img src="{{ asset('assets/svg/Minus.svg') }}"
                                alt="" class="w-30p h-30p"></button>
                        <input type="text" name="quantity" value="0" id="quantity"
                            class="h-30p w-soc mx-1 outline-none text-center text-black font-bold">
                        <button type="button" onclick="increment()"><img src="{{ asset('assets/svg/Plus.svg') }}"
                                alt="" class="w-30p h-30p"></button>
                    </div>
                    <div class="flex justify-between">
                        <button type="submit" class="bg-S text-P p-3 font-bold mt-5 rounded-3xl">Add to Cart</button>
                        <img class="w-soc mt-5 h-soc" src="{{ asset('assets/svg/Favorite.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </form>
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
