function toggleFilterMenu() {
    const filterOptions = document.getElementById('filter-options');
    filterOptions.classList.toggle('show');
}

document.getElementById('salary-range').addEventListener('input', function () {
    const salaryValue = document.getElementById('salary-value');
    const formattedSalary = "LKR " + this.value.toLocaleString(); // Concatenate "Rs." with the salary value
    salaryValue.textContent = formattedSalary;
});


document.addEventListener('DOMContentLoaded', function () {
    const userIcon = document.querySelector('.user-icon');
    const registerBtn = document.querySelector('.register-btn');
    const loginBtn = document.querySelector('.login-btn');

    userIcon.style.display = 'block';
    registerBtn.style.display = 'inline-block';
    loginBtn.style.display = 'inline-block';
});

const navToggle = document.querySelector('.nav-toggle');
const nav = document.querySelector('.nav');

navToggle.addEventListener('click', () => {
    nav.classList.toggle('nav-open');
});

/*AD*/
const adContainers = document.querySelectorAll('.ads .ad-container');

const ads = [
    { text: "Searching For Jobs???", image: "https://cdn.seeklearning.com.au/media/images/career-guide/article/career-advice/web_images/blogs/214/6013/2023.000_NOV-CANDI_Blog_WhereJobsAre_1280x660.webp" },
    { text: "Join our community", image: "https://i.ytimg.com/vi/B498tG3fddM/maxresdefault.jpg" },
    { text: "For the best offer!!", image: "https://images.shiksha.com/mediadata/ugcDocuments/images/wordpressImages/2022_01_Copy-of-What-is-28.jpg" },
    { text: "Want to hire a new employee??", image: "https://i.pinimg.com/564x/48/be/c9/48bec986c499ac88c7bfd246f966f13c.jpg" },
];

function updateAd(adContainer) {
    const randomIndex = Math.floor(Math.random() * ads.length);
    const randomAd = ads[randomIndex];

    const adImage = new Image();
    adImage.src = randomAd.image;
    adImage.alt = "Ad Image";
    adImage.classList.add('ad-img');
    
    const adText = adContainer.querySelector('.ad-text');
    adText.textContent = randomAd.text;

    adContainer.querySelector('.ad-image').innerHTML = ''; // Clear previous image
    adContainer.querySelector('.ad-image').appendChild(adImage);
}

adContainers.forEach(adContainer => {
    updateAd(adContainer);
});

// Update ads periodically
setInterval(() => {
    adContainers.forEach(adContainer => {
        updateAd(adContainer);
    });
}, 3000);

// Function to check if an element is in viewport
function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Function to reveal job container when it comes into viewport
function revealJobContainer() {
    var jobContainer = document.getElementById('job-container');
    if (isInViewport(jobContainer)) {
        jobContainer.classList.remove('hidden');
        window.removeEventListener('scroll', revealJobContainer); // Remove event listener once job container is revealed
    }
}

// Add scroll event listener to reveal job container
window.addEventListener('scroll', revealJobContainer);





