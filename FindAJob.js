document.addEventListener('DOMContentLoaded', function() {
    const salaryRange = document.getElementById('salary-range');
    const salaryValue = document.getElementById('salary-value');

    salaryRange.addEventListener('input', function() {
        salaryValue.textContent = `LKR ${parseInt(salaryRange.value).toLocaleString()}`;
    });
});

// JavaScript for frontend (FindAJob.js)

// Function to handle search
function handleSearch() {
    const keyword = document.querySelector('#search-input').value;
    const jobType = document.querySelector('#job-type').value;
    const location = document.querySelector('#location').value;
    const salaryRange = document.querySelector('#salary-range').value;

    // Send an HTTP request to the backend
    fetch('/search', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ keyword, jobType, location, salaryRange })
    })
    .then(response => response.json())
    .then(data => {
        // Display search results in a different section
        displaySearchResults(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Function to display search results
function displaySearchResults(results) {
    // Display search results in the designated section
    const resultsSection = document.querySelector('#search-results');
    // Clear previous results
    resultsSection.innerHTML = '';
    // Iterate over the results and create HTML elements to display them
    results.forEach(result => {
        const jobListing = document.createElement('div');
        jobListing.classList.add('job-listing');
        // Customize the HTML structure based on your needs
        jobListing.innerHTML = `
            <h2>${result.title}</h2>
            <p>${result.description}</p>
            <p><strong>Salary:</strong> ${result.salary}</p>
            <button>Apply Now</button>
        `;
        resultsSection.appendChild(jobListing);
    });
}

// Add event listener to the search button or form
document.querySelector('#search-button').addEventListener('click', handleSearch);
