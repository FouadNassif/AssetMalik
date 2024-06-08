function changeApoiStatus(staUpdts) {
    userName = staUpdts.getAttribute('data-username');
    time = staUpdts.getAttribute('data-time');
    date = staUpdts.getAttribute('data-date');
    console.log(time)
    const url = '/api/changeStatus';
    const requestData = {
        userName: userName,
        status: staUpdts.value,
        time: time,
        date: date,
    };

    postData(url, requestData)
        .then(data => {
            if (data.success) {
                displayFlashMessageApi(data.message);
                console.log(data.data);
            } else {
                displayFlashMessageApi(data.message);
                console.error("Failed to update status:", data.message);
            }
        });
}

function deleteApoi(staUpdts) {
    userName = staUpdts.getAttribute('data-username');
    time = staUpdts.getAttribute('data-time');
    date = staUpdts.getAttribute('data-date');
    console.log(userName, time, date)
    const url = '/api/deleteApoi';
    const requestData = {
        userName: userName,
        time: time,
        date: date,
    };

    postData(url, requestData)
        .then(data => {
            if (data.success) {
                window.location.reload();
            }
        });
}