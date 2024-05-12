@props(['item', 'itemReviews', 'user'])
<form action="/addToCart" method="post">
    @csrf
    <div class="flex w-19/12">
        <div class="w-2/4 flex justify-center mt-10">
            <img class="w-7/12" src="{{ asset('assets/img/Razor2.png') }}" alt="">
        </div>
        <div class="text-white mt-10">

            <div class="font-bold text-gray-500">
                <a href="/store" class="hover:text-gray-400">Online Store</a> / <a href=""
                    class="hover:text-gray-400">{{ $item->id }}</a>
            </div> <br>

            <h1 class="font-bold text-3xl">{{ $item->name }}</h1><br>
            <p class="text-F font-medium">Machines</p><br>
            <p class="text-2xl font-bold">$ {{ $item->price }}</span></p><br>
            <p>Quantity: <span id="item_quan">{{ $item->quantity }}</span></p>
            <div class="flex mt-5">
                <button type="button" onclick="decrement()"><img src="{{ asset('assets/svg/Minus.svg') }}"
                        alt="" class="w-30p h-30p"></button>
                <input type="text" name="quantity" value="1" id="quantity"
                    class="h-30p w-soc mx-1 outline-none text-center text-black font-bold">
                <button type="button" onclick="increment()"><img src="{{ asset('assets/svg/Plus.svg') }}"
                        alt="" class="w-30p h-30p"></button>
            </div>
            <div class="flex my-5">
                <img src="{{ asset('/assets/svg/Favorite.svg') }}" class="w-7 mx-1" alt="">
                <img src="{{ asset('/assets/svg/Favorite.svg') }}" class="w-7 mx-1" alt="">
                <img src="{{ asset('/assets/svg/Favorite.svg') }}" class="w-7 mx-1" alt="">
                <img src="{{ asset('/assets/svg/Favorite.svg') }}" class="w-7 mx-1" alt="">
                <img src="{{ asset('/assets/svg/Favorite.svg') }}" class="w-7 mx-1" alt="">
                <p class="text-xl">{{ $item->raiting }} stars</p>
            </div>
            <div class="flex justify-between">
                <input name="price" type="text" hidden value="{{ $item->price }}">
                <input name="item_id" type="text" hidden value="{{ $item->id }}">
                @auth
                    <input name="user_id" type="text" hidden value="{{ auth()->user()->id }}">
                @endauth
                <button type="submit" class="bg-S text-P p-3 font-bold mt-5 rounded-3xl">Add to Cart</button>
            </div>
        </div>
    </div>
</form>
<div class="flex justify-center mt-10">
    <div class="w-10/12">
        <div class="flex">
            <button class="mr-3" onclick="showItemDescription()">
                <h2 class="text-lg text-S font-bold border-t-4 border-S w-fit p-1" id="desBut">Description</h2>
            </button>
            <button class="mr-3" onclick="showItemReviews()">
                <h2 class="text-lg text-S font-bold border-t-4 border-S w-fit p-1" id="revBut">Reviews</h2>
            </button>
        </div>
        <hr>
        <div id="itemData">
            <h2 class="text-slate-300 p-3">{{ $item->description }}</h2><br>
        </div>
    </div>
</div>
<div class="flex justify-center">
    <div class=" w-full p-7 hidden" id="reviewsSection">
        <div class="flex flex-wrap justify-center">
            <div class="bg-white w-Rev h-200p p-2 m-2 min-h-Rev max-h-Rev rounded-xl">
                @auth
                    <div class="flex justify-between">
                        <p class="font-bold">{{ Auth::user()->name }}</p>
                        <p>2024-05-10 12:58:38</p>
                    </div>
                    <div class="flex">
                        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
                        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
                        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
                        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
                        <img class="w-20p" src="{{ asset('assets/svg/Favorites.svg') }}" alt="">
                    </div>
                    <div>
                        <form action="/addReview" method="POST" class="w-full">
                            @csrf
                            <textarea type="text" name="review"
                                class="w-full h-24 outline-none p-2 font-bold text-slate-900 border-black border-2" placeholder="Add a Review..."></textarea>
                            <input name="item_id" type="text" hidden value="{{ $item->id }}">
                            <button class="w-4/12 h-8 bg-S font-bold text-P " type="submit"> Add Review</button>
                        </form>
                    </div>
                @endauth

            </div>
            @foreach ($itemReviews as $review)
                <x-review :user="$review->user" :review="$review->review" :date="$review->created_at" :reviewId="$review->id" :reviewLikes="$review->likes" />
            @endforeach
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
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    }

    function likeReview(review_id) {
        let img = document.getElementById("likeSVG");
        if (img.src.includes('Upvoted')) {
            console.log("W")
            const url = '/api/removeLike';
            const requestData = {
                review_id: review_id,
            };
            postData(url, requestData)
                .then(data => {
                    if (data.success == "true") {
                        document.getElementById("reviewLikes").textContent = data.likes
                        img.src = img.getAttribute('data-unlike');
                    }
                });
            return
        }
        const url = '/api/likeReview';
        const requestData = {
            review_id: review_id,
        };
        postData(url, requestData)
            .then(data => {
                if (data.success == "true") {
                    document.getElementById("reviewLikes").textContent = data.likes
                    img.src = img.getAttribute('data-like');
                }
            });
    }

    let itemData = document.getElementById("itemData");
    let reviewsSection = document.getElementById("reviewsSection");
    let desBut = document.getElementById('desBut');
    let revBut = document.getElementById('revBut');

    function showItemDescription() {
        itemData.style.display = "block";
        reviewsSection.style.display = "none";
    }

    function showItemReviews() {
        itemData.style.display = "none";
        reviewsSection.style.display = "block";
    }
</script>

{{-- 
Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, id? Illum dolorum doloremque eos
                    corporis odit temporibus suscipit! Alias quidem doloribus dolore ducimus illo quam exercitationem maxime
                    rerum laudantium ipsa. Quaerat sunt veritatis molestiae pariatur eaque harum odit fugit reiciendis. --}}
