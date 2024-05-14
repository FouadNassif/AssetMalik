<!-- store/searched.blade.php -->

@extends('components.layout')

@section('title', 'Search Results')

@section('content')
    <div class="flex justify-center mt-5">
        <div class="flex justify-center w-full">
            <div class="w-3/12 border-r-4 h-full p-5">
                <form id="searchForm" action="{{ route('search') }}" method="GET">
                    <div class="flex">
                        @include('partials._search')
                    </div>
                    <div class="p-5">
                        <div>
                            <p class="text-white font-bold text-2xl">Price</p>
                            <div class="text-lg text-white ml-3">
                                <div>
                                    <input class="border-0" type="radio" id="low_to_high" name="price"
                                        value="low_to_high" {{ request('price') == 'low_to_high' ? 'checked' : '' }}>
                                    <label for="low_to_high">Low to High</label>
                                </div>
                                <div>
                                    <input type="radio" id="high_to_low" name="price" value="high_to_low"
                                        {{ request('price') == 'high_to_low' ? 'checked' : '' }}>
                                    <label for="high_to_low">High to Low</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <script>
                const radioButtons = document.querySelectorAll('input[type="radio"][name="price"]');

                radioButtons.forEach(radioButton => {
                    radioButton.addEventListener('change', function() {

                        document.getElementById('searchForm').submit();
                    });
                });
            </script>


            <div class="flex flex-wrap p-5 justify-center min-w-3/4">
                @foreach ($data as $item)
                    <x-item-card :item="$item" />
                @endforeach
            </div>
            @foreach ($favoriteItemsId as $itemId)
                <script>
                    document.getElementById(`favoriteImg_{{ $itemId }}`).src = "{{ asset('assets/svg/Favorites.svg') }}";
                </script>
            @endforeach
        </div>
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
