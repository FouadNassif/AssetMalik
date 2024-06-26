<div class="bg-Dark1 h-fit flex flex-col w-full">
    <a href="/admin">
        <h1 class="text-S font-bold text-2xl text-center">Admin Page</h1>
    </a>
    <form action="/logout" method="post">
        @csrf
        <button type="submit">Logout</button>
    </form>
    <a href="/profile">Profile</a>
    <div class=" flex flex-wrap justify-center">
        <div class="bg-F w-1/4 text-center py-2 rounded-2xl m-5 hover:bg-P cursor-pointer">
            <a href="/admin/appointments" class="text-white text-2xl font-bold">Appointments</a>
        </div>
        <div class="bg-F w-1/4 text-center py-2 rounded-2xl m-5 hover:bg-P cursor-pointer">
            <a href="/admin/workers" class="text-white text-2xl font-bold">Workers</a>
        </div>
        <div class="bg-F w-1/4 text-center py-2 rounded-2xl m-5 hover:bg-P cursor-pointer">
            <a href="/admin/reviews" class="text-white text-2xl font-bold">Reviews</a>
        </div>
        <div class="bg-F w-1/4 text-center py-2 rounded-2xl m-5 hover:bg-P cursor-pointer">
            <a href="/admin/order" class="text-white text-2xl font-bold">Order</a>
        </div>
        <div class="bg-F w-1/4 text-center py-2 rounded-2xl m-5 hover:bg-P cursor-pointer">
            <a href="/admin/items" class="text-white text-2xl font-bold">Items</a>
        </div>
        <div class="bg-F w-1/4 text-center py-2 rounded-2xl m-5 mb-5 hover:bg-P cursor-pointer">
            <a href="/admin/offer" class="text-white text-2xl font-bold">Offer</a>
        </div>
    </div>
</div>
