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
        function (date) {
            return date.getDay() === 1;
        }
    ],
    dateFormat: "Y-m-d",
    onChange: function (selectedDates, dateStr, instance) {
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
                console.log(data.times)
                let bookedDates = [];
                for (let i of data.times) {
                    bookedDates.push(i);
                }

                sortArrayAsc(bookedDates);
                console.log(bookedDates);
                const now = new Date();
                let day = now.getDate(); // Get the day of the month
                let month = now.getMonth() + 1; // Get the month (January is 0)

                // Add leading zero if needed
                day = ('0' + day).slice(-2);
                month = ('0' + month).slice(-2);
                console.log(typeof(dateStr));
                console.log(`Formatted date: ${month}-${day}`);
                const hours = now.getHours();
                const minutes = now.getMinutes();
                const currTime = `${hours}:${minutes}`;
                for (let i = 0; i < timeSlots.length; i++) {
                    if (!bookedDates.includes(timeSlots[i]) && timeSlots[i] > currTime) {
                        createTimeButton(timeSlots[i]);
                    }
                }
            })
            .catch(error => {
                console.error('There was a problem with the fetch operation:', error);
            });
    },
    onReady: function (selectedDates, dateStr, instance) {
        bookedDates.forEach(function (date) {
            var dayElement = instance.days.querySelector('[data-date="' + date + '"]');
            if (dayElement) {
                dayElement.classList.add('booked-date');
            }
        });
    }
});

function save(button) {
    inputTime.value = button.textContent;
    let buttons = document.querySelectorAll("#timeInputcon a");
    for (but of buttons) {
        but.style.backgroundColor = "transparent";
        but.style.color = '#F5D57E'
    }
    button.style.backgroundColor = "#F5D57E";
    button.style.color = "#0D484F";
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
    button.onclick = function () {
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