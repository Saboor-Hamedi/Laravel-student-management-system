document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();
    let query = document.getElementById('searchInput').value;

    let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Send AJAX request
    fetch('/search', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify({ query: query })
    })
    .then(response => response.json())
    .then(data => {
        // Update UI with search results
        let resultsHtml = '';

        data.results.forEach(result => {
            resultsHtml += `<div>${result.title}</div>`; // Assuming 'title' is a field in your JobList model
        });

        document.getElementById('searchResults').innerHTML = resultsHtml;
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
