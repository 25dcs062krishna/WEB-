let themeButton = document.createElement("button");
themeButton.classList.add("mybtn")

themeButton.innerHTML = "Dark Mode";
themeButton.className = "theme-btn";

document.body.prepend(themeButton);

themeButton.addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");

    if (document.body.classList.contains("dark-mode")) {
        themeButton.innerHTML = "Light Mode";
    } else {
        themeButton.innerHTML = "Dark Mode";
    }
});

let notification = document.createElement("div");

notification.innerHTML = "Welcome to StudentHub!";
notification.className = "notification";

document.body.prepend(notification);

setTimeout(function() {
    notification.style.display = "none";
}, 5000);

let cards = document.querySelectorAll(".feature-card");

cards.forEach(function(card) {
    card.addEventListener("click", function() {
        card.style.transform = "scale(0.97)";

        setTimeout(function() {
            card.style.transform = "";
        }, 150);
    });
});

let questions = document.querySelectorAll(".question");
  questions.forEach(function(question){
    question.addEventListener("click", function() {

        let answer = this.nextElementSibling;
        answer.classList.toggle("show");
    });

});
let menuBtn = document.getElementById("menuBtn");
let navMenu = document.getElementById("navMenu");

menuBtn.addEventListener("click", function() {
    navMenu.classList.toggle("show");
});
