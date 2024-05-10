<nav id="navbar"
    class="flex
z-50
justify-between 
items-center  
absolute
top-0
w-full 
text-S
text-xl 
font-Def
sticky">
    <ul class="flex">
        <li class="ml-5">
            <a href="/Location">LOCATION</a>
        </li>
        <li class="ml-5">
            <a href="/aboutus">ABOUT US</a>
        </li>
        <li class="ml-5">
            <a href="/store">ONLINE STORE</a>
        </li>
        <li class="ml-5">
            <a href="/contact">CONTACT US</a>
        </li>

    </ul>
    <a class="mr-64" href="/" id="logo"><img src="{{ asset('assets/svg/Logo.svg') }}" alt=""></a>
    <div class="flex my-2 justify-center align-center text-center">
        @auth
            <p class="bg-S text-white  font-bold rounded-full w-4 h-8 text-lg text-center">{{ Auth::user()->cart()->count() }}</p>
        @endauth
        <a href="/cart"><img src="{{ asset('/assets/svg/Cart.svg') }}" class="w-soc" alt=""></a>
        <a href="/profile"><img src="{{ asset('assets/svg/Profile.svg') }}" alt=""></a>
        <a href="/BookNow" class="mx-5 border-4 border-S px-4 py-1 hover:bg-S hover:text-P text-center h-11">Book
            Now</a>
    </div>
</nav>

<script>
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        const scrollPosition = window.scrollY;
        const threshold = 900;
        const targetColor = 'rgba(0, 0, 0, 0.8)';
        const opacity = Math.min(scrollPosition / threshold, 1);
        navbar.style.backgroundColor =
            `rgba(8, 111, 123, ${opacity})`;
    });
</script>
