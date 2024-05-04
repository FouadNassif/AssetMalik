@if (session('BookNow_success'))
<div class="text-red-600 absolute z-50 bg-P w-2/4 left-1/4 text-center p-5 text-2xl font-bold rounded-2xl" id="message">
    {{ session('BookNow_success') }}
</div>
@endif

<script>
    // Add a timeout function to hide the message after 3 seconds
    setTimeout(function() {
        var element = document.getElementById('message');
        if (element) {
            element.style.display = 'none';
        }
    }, 3000); // 3000 milliseconds = 3 seconds
</script>