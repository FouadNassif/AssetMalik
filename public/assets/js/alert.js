function displayFlashMessageApi(message) {
    const notification = document.createElement('div');
    notification.id = 'notification';
    notification.className = 'notification bg-white p-5 border-4 border-primary shadow-lg flex items-center justify-between';
    notification.innerHTML = `
        <h1>${message}</h1>
        <button onclick="closeNotificationApi()">X</button>
        <div class="progress-bar"></div>
    `;
    document.body.appendChild(notification);

    setTimeout(() => {
        closeNotificationApi();
        window.location.reload();
    }, 5000);
}

function closeNotificationApi() {
    const notification = document.getElementById('notification');
    if (notification) {
        notification.remove();
        window.location.reload();
    }
}