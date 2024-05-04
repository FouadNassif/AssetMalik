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
    <div>
        <a href="/profile"><img src="{{ asset('assets/svg/Profile.svg') }}" alt=""></a>
        <a href="/BookNow" class="mr-5 border-4  border-S px-4 py-1 hover:bg-S hover:text-P">Book Now</a>
        <a href="" class="mr-5">Cart</a>
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
