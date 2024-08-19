onmessage = function(event) {
    const { url, rps } = event.data;
    let successCount = 0;
    let errorCount = 0;

    const sendRequest = () => {
        fetch(url)
            .then(response => {
                if (response.ok) {
                    successCount++;
                } else {
                    errorCount++;
                    console.error(`Request failed with status: ${response.status}`);
                }
            })
            .catch(error => {
                errorCount++;
                console.error(`Request error: ${error.message}`);
            });
    };

    const intervalId = setInterval(() => {
        for (let i = 0; i < rps; i++) {
            sendRequest();
        }
    }, 1000);

    setTimeout(() => {
        clearInterval(intervalId);
        postMessage({ successCount, errorCount });
    }, 5000); // Run the test for 5 seconds
};
