<div class="flex justify-center mt-10">
    <form action="/BookNowCheck" method="POST" class="border-S border-4 rounded-2xl bg-P w-9/12 h-auto p-7">
        @csrf
        <div class="">
            <h1 class="text-center text-S text-xl font-bold">Book Now</h1>
            <div class="mt-5">
                <label for="name" class="text-white font-medium">Name</label>
                @error('name')
                    <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                @enderror <br>
                @auth
                    <input type="text"
                        class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white" name="name"
                        value="{{ auth()->user()->name }}">
                @else
                    <input type="text"
                        class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white" name="name"
                        value="{{ old('name') }}">
                @endauth
            </div>

            <div class="mt-5">
                <label for="phoneNumber" class="text-white font-medium">Phone Number</label>
                @error('phoneNumber')
                    <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                @enderror <br>
                @auth
                    <input type="number"
                        class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white"
                        name="phoneNumber" value="{{ auth()->user()->phoneNumber }}">
                @else
                    <input type="number"
                        class="w-full bg-transparent outline-0 cursor-pointer mt-4 border-b-2 border-white"
                        name="phoneNumber" value="{{ old('phoneNumber') }}">
                @endauth
            </div>

            <div class="flex justify-between w-full text-center">
                <div class="mt-5 w-2/5 flex flex-col">
                    <label for="date" class="text-white font-medium">Date</label>
                    @error('date')
                        <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                    @enderror <br>
                    <input type="text" id="calendar-input" name="date" value="{{ old('date') }}">
                </div>

                <div class="mt-5 w-2/4 flex flex-col">
                    <label for="time" class="text-white font-medium">Time</label>
                    @error('time')
                        <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                    @enderror <br>
                    <input type="time" readonly id="inptime" name="time">
                    <div id="timeInputcon" class="mt-3 flex-wrap w-full flex justify-center">
                    </div>
                </div>
            </div>

            <div class="mt-5 flex flex-wrap overflow-scroll h-96 justify-center" id="wcon">
                <input type="text" value="" name="workerName" id="WN" hidden>
                @if ($workers->count() > 0)
                    @foreach ($workers as $worker)
                        <button type="button" value="{{ $worker->name }}" onclick="addWorker(this)"
                            class="w-60 h-80 border-S rounded-2xl border-2 p-4 mr-5 mb-5 cursor-pointer z-0 hover:bg-PHover">
                            <img src="{{ asset('assets/img/G1.jpeg') }}" alt="" class="w-52 h-52 rounded-t-xl">
                            <h2>{{ $worker->name }}</h2>
                            <h3>Experience: {{ $worker->experience }}</h3>
                            <p>Bio: {{ $worker->bio }}</p>
                            </butotn>
                    @endforeach
                @endif
            </div>
            <div>
                <div class="mt-5">
                    <label for="message" class="text-white font-medium">Leave A Message (Optimal)</label>
                    @error('message')
                        <span class="text-red-600 font-bold ml-5">*{{ $message }}</span>
                    @enderror <br>
                    <textarea name="message"
                        class="w-full text-white bg-transparent outline-0 cursor-pointer mt-4 border-2 border-white p-2" cols="30"
                        rows="5"></textarea>
                </div>
            </div>

            <div class="flex justify-center mt-5">
                <button type="submit" class="border-2 border-S p-1 font-bold text-S mr-3">Submit</button>
                <button type="reset" class="bg-S text-P p-1 font-bold ">Cancel</button>
            </div>
        </div>
    </form>
</div>
<script>
    let calendarInput = document.getElementById("calendar-input");
    const timeSlots = [
        '10:00', '10:30', '11:00', '11:30', '12:00', '12:30',
        '13:00', '13:30', '14:00', '14:30', '15:00', '15:30',
        '16:00', '16:30', '17:00', '17:30', '18:00', '18:30',
        '19:00', '19:30', '20:00'
    ];
    let bookedDates = [];

    let timeInputCon = document.getElementById("timeInputcon");
    let inputTime = document.getElementById("inptime");


    flatpickr("#calendar-input", {
        inline: true,
        minDate: "today",
        disable: [
            function(date) {
                return date.getDay() === 1;
            }
        ],
        dateFormat: "Y-m-d",
        onChange: function(selectedDates, dateStr, instance) {
            while (timeInputCon.firstChild) {
                timeInputCon.removeChild(timeInputCon.firstChild);
            }
            console.log("Selected date:", dateStr);

            const url = '/api/processDate';
            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                            'content')
                    },
                    body: JSON.stringify({
                        date: dateStr
                    })
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();

                })
                .then(data => {
                    let bookedDates = [];
                    for (let i of data.times) {
                        bookedDates.push(i);
                    }

                    sortArrayAsc(bookedDates);

                    for (let i = 0; i < timeSlots.length; i++) {
                        if (!bookedDates.includes(timeSlots[i])) {
                            createTimeButton(timeSlots[i]);
                        }
                    }
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        },
        onReady: function(selectedDates, dateStr, instance) {
            bookedDates.forEach(function(date) {
                var dayElement = instance.days.querySelector('[data-date="' + date + '"]');
                if (dayElement) {
                    dayElement.classList.add('booked-date');
                }
            });
        }
    });

    function save(button) {
        inputTime.value = button.textContent;
    }

    function addWorker(bt) {
        document.getElementById("WN").value = bt.value;
        let buttons = document.querySelectorAll("#wcon button");
        for (but of buttons) {
            but.style.backgroundColor = "transparent";
        }
        bt.style.backgroundColor = "#093136";
    }

    function createTimeButton(txt) {
        let button = document.createElement("a");
        button.textContent = txt;
        button.classList.add("border-S", "cursor-pointer", "border-2", "rounded-xl",
            "p-1", "text-xl", "text-S", "font-bold", "hover:bg-S",
            "hover:text-P", "mr-2", "my-2")
        button.onclick = function() {
            save(this);
        };
        timeInputCon.appendChild(button);
    }

    function sortArrayAsc(arr) {
        function timeToMinutes(timeStr) {
            const [hours, minutes] = timeStr.split(':');
            return parseInt(hours) * 60 + parseInt(minutes);
        }
        arr.sort((a, b) => timeToMinutes(a) - timeToMinutes(b));
        return arr;
    }
</script>
