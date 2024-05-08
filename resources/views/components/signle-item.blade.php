@props(['item'])

<div class="flex p-7">
    <div class="w-3/4">
        <img src="{{ asset('assets/img/Razor2.png') }}" alt="">
    </div>
    <div class="text-white ml-10">
        <h1 class="font-bold text-2xl">{{ $item->name }}</h1><br>
        <h2 class="text-white-500">{{ $item->description }}</h2><br>
        <p>Category: {{ $item->category }}</p><br>
        <p>Price: {{ $item->price }}</span></p><br>
        <p>Quantity: <span id="item_quan">{{ $item->quantity }}</span></p>
        <div class="flex mt-5">
            <button type="button" onclick="decrement()"><img src="{{ asset('assets/svg/Minus.svg') }}" alt=""
                    class="w-30p h-30p"></button>
            <input type="text" name="quantity" value="0" id="quantity"
                class="h-30p w-soc mx-1 outline-none text-center text-black font-bold">
            <button type="button" onclick="increment()"><img src="{{ asset('assets/svg/Plus.svg') }}" alt=""
                    class="w-30p h-30p"></button>
        </div>
        <div class="flex justify-between">
            <button type="submit" class="bg-S text-P p-3 font-bold mt-5 rounded-3xl">Add to Cart</button>
        </div>
    </div>
</div>

<script>
    const quantityInput = document.getElementById('quantity');
    function increment() {
        const quantityValue = document.getElementById("item_quan");
        if (parseInt(quantityValue.textContent) > quantityInput.value) {
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }
    }

    function decrement() {
        var currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 0) {
            quantityInput.value = currentQuantity - 1;
        }
    }
</script>
