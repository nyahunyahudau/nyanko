self.onmessage = function(event) {
    const { rps } = event.data;
    const interval = 1000 / rps;

    let requestsCompleted = 0;

    function makeRequest() {
        // Example of a request
        fetch('https://example.com/api')
            .then(() => {
                requestsCompleted++;
                if (requestsCompleted % 100 === 0) {
                    postMessage({ requestsCompleted });
                }
            })
            .catch(() => {
                // Handle error
            })
            .finally(() => {
                setTimeout(makeRequest, interval);
            });
    }

    makeRequest();
};
