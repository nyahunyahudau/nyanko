let requestsCompleted = 0;
let errors = 0;
let rps = 0;

self.onmessage = function(event) {
    rps = event.data.rps;
    const interval = 1000 / rps;

    function makeRequest() {
        const startTime = performance.now();
        fetch('https://example.com/api')
            .then(() => {
                const endTime = performance.now();
                const elapsedTime = endTime - startTime;
                // Calculate and update RPS based on time taken
                const currentRPS = 1000 / elapsedTime;
                postMessage({ requestsCompleted, errors, currentRPS });
            })
            .catch(() => {
                errors++;
                postMessage({ requestsCompleted, errors, currentRPS: 0 });
            })
            .finally(() => {
                requestsCompleted++;
                setTimeout(makeRequest, interval);
            });
    }

    makeRequest();
};
