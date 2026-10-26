let form = document.querySelector("form");

let openmodal = document.getElementById("openmodal");
let modal = document.getElementById("modal");
let closemodal = document.getElementById("closemodal");

openmodal.addEventListener("click", function() {
    modal.style.display = "block";
});

closemodal.addEventListener("click", function() {
    modal.style.display = "none";
});

form.addEventListener("submit", function(event) {
    event.preventDefault();

    let fullname = document.getElementById("fullname").value.trim();
    let studentId = document.getElementById("student-id").value.trim();
    let email = document.getElementById("email").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let course = document.getElementById("course").value;
    let semester = document.getElementById("semester").value;
    let dob = document.getElementById("dob").value;
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm-password").value;
    let gender = document.querySelector('input[name="gender"]:checked');
    let terms = document.querySelector('.terms input[type="checkbox"]').checked;

    let namePattern = /^[A-Za-z ]{3,30}$/;
    let studentIdPattern = /^[A-Za-z0-9]+$/;
    let phonePattern = /^[6-9][0-9]{9}$/;
    let passwordPattern = /^(?=.*[A-Za-z])(?=.*[0-9]).{6,}$/;

    if (!namePattern.test(fullname)) {
        alert("Enter a valid full name.");
        return;
    }

    if (!studentIdPattern.test(studentId)) {
        alert("Enter a valid Student ID.");
        return;
    }

    if (email === "") {
        alert("Please enter your email.");
        return;
    }

    if (!phonePattern.test(phone)) {
        alert("Enter a valid 10-digit mobile number.");
        return;
    }

    if (course === "") {
        alert("Please select a course.");
        return;
    }

    if (semester === "") {
        alert("Please select your semester.");
        return;
    }

    if (dob === "") {
        alert("Please select your date of birth.");
        return;
    }

    if (!gender) {
        alert("Please select your gender.");
        return;
    }

    if (!passwordPattern.test(password)) {
        alert("Password must contain at least 6 characters, one letter and one number.");
        return;
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return;
    }

    if (!terms) {
        alert("Please accept the Terms and Conditions.");
        return;
    }

    alert("Registration successful!");
    form.reset();
});