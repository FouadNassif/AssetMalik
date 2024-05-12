<div class="flex justify-center mt-5">
    <div class="flex justify-center w-12/12">
        <div class="w-full border-r-4 h-full p-5">
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


        <div class="flex flex-wrap p-5 justify-center">
            @foreach ($items as $item)
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
