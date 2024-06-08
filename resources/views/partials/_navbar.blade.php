<nav id="navbar"
    class="flex z-50 justify-between align-center items-center top-0 w-full text-S text-xl font-Def sticky px-3 bg-black bg-opacity-40">
    <button type="button" class=" flex-col hidden" id="mobileNavBut">
        <img src="{{ asset('assets/svg/comb.svg') }}" class="w-11 -mb-6">
        <img src="{{ asset('assets/svg/comb.svg') }}" class="w-11">
    </button>
    <div class="flex-col text-center bg-P px-3 py-3 absolute top-16 hidden" id="mobileNavLinks">
        <a href="/Location">LOCATION</a>
        <a href="/aboutus">ABOUT</a>
        <a href="/store">STORE</a>
        <a href="/contact">CONTACT</a>
    </div>
    <ul class="flex" id="navbarUl">
        <li class="ml-5">
            <a href="/Location">LOCATION</a>
        </li>
        <li class="ml-5">
            <a href="/aboutus">ABOUT</a>
        </li>
        <li class="ml-5 text-blue-600 md:text-S">
            <a href="/store">STORE</a>
        </li>
        <li class="ml-5">
            <a href="/contact">CONTACT</a>
        </li>
    </ul>
    <a class="mr-12" href="/" id="logo"><img src="{{ asset('assets/svg/Logo.svg') }}" alt=""></a>
    <div class="flex my-2 justify-center align-center text-center items-center">
        @auth
            @if (Auth::user()->role == 0)
                <a href="/admin"><img src="{{ asset('assets/svg/Profile.svg') }}"></a>
            @else
                <p class="bg-P text-white font-bold rounded-full text-xl h-fit px-1">
                    {{ Auth::user()->cart()->count() }}</p>
                <a href="/cart"><img src="{{ asset('/assets/svg/Cart.svg') }}" class="w-soc" alt=""></a>
                <a href="/profile"><img src="{{ asset('assets/svg/Profile.svg') }}" class="w-12 mx-5"></a>
                <a href="/BookNow" class="mr-5 border-4 border-S px-3 py-1 hover:bg-S hover:text-P text-center h-11">Book
                    Now</a>
            @endif
        @endauth
        @guest
            <a href="/profile"><img src="{{ asset('assets/svg/Profile.svg') }}" alt=""></a>
            <a href="/BookNow" class="mx-5 border-4 border-S px-4 py-1 hover:bg-S hover:text-P text-center h-11">Book
                Now</a>
        @endguest
    </div>
</nav>
