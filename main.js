document.getElementById('startTest').addEventListener('click', () => {
    const statusElement = document.getElementById('statusText');
    const requestsCompletedElement = document.getElementById('requestsCompleted');
    const errorsElement = document.getElementById('errors');
    const currentRpsElement = document.getElementById('currentRPS');

    statusElement.textContent = 'Starting test...';

    const worker = new Worker('worker.js');

    worker.onmessage = function(event) {
        requestsCompletedElement.textContent = event.data.requestsCompleted;
        errorsElement.textContent = event.data.errors;
        currentRpsElement.textContent = event.data.currentRPS.toFixed(2);
        statusElement.textContent = 'Running';
    };

    worker.onerror = function(error) {
        statusElement.textContent = 'Error';
        console.error('Worker error:', error);
    };

    worker.postMessage({ rps: 2000 });
});
