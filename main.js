document.getElementById('startTest').addEventListener('click', () => {
    const statusElement = document.getElementById('status');
    statusElement.textContent = 'Starting test...';

    // Create a new Web Worker
    const worker = new Worker('worker.js');

    worker.onmessage = function(event) {
        statusElement.textContent = `Completed ${event.data.requestsCompleted} requests.`;
    };

    worker.postMessage({ rps: 2000 });
});
