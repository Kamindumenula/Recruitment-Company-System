document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("select-user-type").addEventListener("click", function() {
        this.style.display = "none";
        document.getElementById("user-type-buttons").style.display = "flex";
    });
});

function handleUserType(userType) {
    document.getElementById("user-type-buttons").style.display = "none";
    if (userType === "employer") {
        document.getElementById("employer-form").style.display = "block";
    } else if (userType === "employee") {
        document.getElementById("employee-form").style.display = "block";
    } else if (userType === "both") {
        document.getElementById("both-form").style.display = "block";
    }
}

function togglePasswordVisibility(id) {
    const input = document.getElementById(id);
    const icon = input.nextElementSibling.querySelector("i");
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

function validateEmployerForm() {
    const password = document.getElementById("emp-password").value;
    const confirmPassword = document.getElementById("emp-confirm-password").value;
    if (password !== confirmPassword) {
        document.getElementById("emp-password").classList.add("shake");
        document.getElementById("emp-confirm-password").classList.add("shake");
        setTimeout(() => {
            document.getElementById("emp-password").classList.remove("shake");
            document.getElementById("emp-confirm-password").classList.remove("shake");
        }, 500);
        return false;
    }
    // Show additional details form for employer
    document.getElementById("employer-form-details").style.display = "none";
    document.getElementById("employer-additional-details").style.display = "block";
    return false;
}

function validateEmployeeForm() {
    const password = document.getElementById("emp-password").value;
    const confirmPassword = document.getElementById("emp-confirm-password").value;
    if (password !== confirmPassword) {
        document.getElementById("emp-password").classList.add("shake");
        document.getElementById("emp-confirm-password").classList.add("shake");
        setTimeout(() => {
            document.getElementById("emp-password").classList.remove("shake");
            document.getElementById("emp-confirm-password").classList.remove("shake");
        }, 500);
        return false;
    }
    // Show additional details form for employee
    document.getElementById("employee-form-details").style.display = "none";
    document.getElementById("employee-additional-details").style.display = "block";
    return false;
}

function validateBothForm() {
    const password = document.getElementById("both-password").value;
    const confirmPassword = document.getElementById("both-confirm-password").value;
    if (password !== confirmPassword) {
        document.getElementById("both-password").classList.add("shake");
        document.getElementById("both-confirm-password").classList.add("shake");
        setTimeout(() => {
            document.getElementById("both-password").classList.remove("shake");
            document.getElementById("both-confirm-password").classList.remove("shake");
        }, 500);
        return false;
    }
    // Show additional details form for both
    document.getElementById("both-form-details").style.display = "none";
    document.getElementById("both-additional-details").style.display = "block";
    return false;
}


//--------//
document.addEventListener("DOMContentLoaded", function() {
    const selectUserTypeBtn = document.getElementById('select-user-type');
    const userTypeSelection = document.getElementById('userTypeSelection');
    const employerBtn = document.getElementById('employer-btn');
    const employeeBtn = document.getElementById('employee-btn');
    const bothBtn = document.getElementById('both-btn');
    const formContainer = document.querySelector('.form-container');
    const registrationForm = document.getElementById('registrationForm');
    const nextBtn = document.getElementById('nextBtn');

    // Function to show employer form fields
    function showEmployerForm() {
        formContainer.innerHTML = `
            <div class="form-group">
                <label for="companyName">Company Name:</label>
                <input type="text" id="companyName" name="companyName" placeholder="Enter company name" required>
            </div>
            <div class="form-group">
                <label for="companyAddress">Company Address:</label>
                <input type="text" id="companyAddress" name="companyAddress" placeholder="Enter company address" required>
            </div>
            <div class="form-group">
                <label for="companyStatus">Company Status:</label>
                <select id="companyStatus" name="companyStatus" required>
                    <option value="registered">Registered</option>
                    <option value="cooperate">Co-operate</option>
                    <option value="sole">Sole</option>
                </select>
            </div>
            <div class="form-group">
                <label for="companyEmail">Company Email:</label>
                <input type="email" id="companyEmail" name="companyEmail" placeholder="Enter company email" required>
            </div>
            <div class="form-group">
                <label for="companyPhone">Company Phone:</label>
                <input type="tel" id="companyPhone" name="companyPhone" placeholder="Enter company phone" required>
            </div>
        `;
    }

    // Function to show employee form fields
    function showEmployeeForm() {
        formContainer.innerHTML = `
            <div class="form-group">
                <label for="employeeAddress">Address:</label>
                <input type="text" id="employeeAddress" name="employeeAddress" placeholder="Enter address" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="aboutMe">About Myself:</label>
                <textarea id="aboutMe" name="aboutMe" rows="4" placeholder="Tell us about yourself"></textarea>
            </div>
            <div class="form-group">
                <label for="cv">Upload CV:</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            </div>
        `;
    }

    // Function to show combined form fields for both employer and employee
    function showBothForm() {
        formContainer.innerHTML = `
            <!-- Insert fields for both employer and employee here -->
            <div class="form-group">
                <label for="companyName">Company Name:</label>
                <input type="text" id="companyName" name="companyName" placeholder="Enter company name" required>
            </div>
            <div class="form-group">
                <label for="companyAddress">Company Address:</label>
                <input type="text" id="companyAddress" name="companyAddress" placeholder="Enter company address" required>
            </div>
            <div class="form-group">
                <label for="companyStatus">Company Status:</label>
                <select id="companyStatus" name="companyStatus" required>
                    <option value="registered">Registered</option>
                    <option value="cooperate">Co-operate</option>
                    <option value="sole">Sole</option>
                </select>
            </div>
            <div class="form-group">
                <label for="companyEmail">Company Email:</label>
                <input type="email" id="companyEmail" name="companyEmail" placeholder="Enter company email" required>
            </div>
            <div class="form-group">
                <label for="companyPhone">Company Phone:</label>
                <input type="tel" id="companyPhone" name="companyPhone" placeholder="Enter company phone" required>
            </div>
            <div class="form-group">
                <label for="employeeAddress">Address:</label>
                <input type="text" id="employeeAddress" name="employeeAddress" placeholder="Enter address" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="aboutMe">About Myself:</label>
                <textarea id="aboutMe" name="aboutMe" rows="4" placeholder="Tell us about yourself"></textarea>
            </div>
            <div class="form-group">
                <label for="cv">Upload CV:</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            </div>
        `;
    }

    // Event listener for "Select User Type" button click
    selectUserTypeBtn.addEventListener('click', function() {
        selectUserTypeBtn.style.display = 'none'; // Hide select user type button
        userTypeSelection.style.display = 'block'; // Show user type buttons
    });

    // Event listeners for user type buttons
    employerBtn.addEventListener('click', function() {
        showEmployerForm();
    });

    employeeBtn.addEventListener('click', function() {
        showEmployeeForm();
    });

    bothBtn.addEventListener('click', function() {
        showBothForm();
    });

    // Event listener for form submission
    registrationForm.addEventListener('submit', function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Perform form validation here if needed

        // Submit the form data to process_form.php
        const formData = new FormData(registrationForm);
        fetch('process_form.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Log the response from process_form.php
            // Optionally, redirect or show success message here
        })
        .catch(error => {
            console.error('Error:', error);
            // Handle errors here
        });
    });
});
