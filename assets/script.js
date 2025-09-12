document.addEventListener("DOMContentLoaded", () => {

    // show Navbar when scrolled out of Hero page
    const heroSection = document.getElementById("home");
    const navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function(){
        const heroBottom = heroSection.offsetTop + heroSection.offsetHeight;

        if (window.scrollY >= heroBottom){
            navbar.classList.add("visible");   // slide in
        }
        else{
            navbar.classList.remove("visible"); // slide out
        }
    });


    // Display features on click 
    const buttons = document.querySelectorAll(".features button");
    const features = document.querySelectorAll(".feature");

    function showFeature(index) {
        features.forEach((f, i) => {
            if (i === index) {
                f.classList.add("active");
            } else {
                f.classList.remove("active");
            }
        });

        buttons.forEach((btn, i) => {
            if (i === index) {
                btn.classList.add("fActive");
                btn.classList.remove("fNotActive");
            } else {
                btn.classList.add("fNotActive");
                btn.classList.remove("fActive");
            }
        });
    }

    button1.addEventListener("click", () => showFeature(0));
    button2.addEventListener("click", () => showFeature(1));
    button3.addEventListener("click", () => showFeature(2));


    // Display FAQ on click
    const answers = document.querySelectorAll(".answer");
    const showBtn = document.querySelectorAll(".showFaq");

    function showAnswer(index){
        answers.forEach((f, i) => {
            if (i === index){
                f.classList.add("active");
                showBtn[i].classList.add("activee");
            }
            else{
                f.classList.remove("active");
                showBtn[i].classList.remove("activee")
            }
        })
    }

    question1.addEventListener("click", () => showAnswer(0));
    question2.addEventListener("click", () => showAnswer(1));
    question3.addEventListener("click", () => showAnswer(2));
    question4.addEventListener("click", () => showAnswer(3));



    // Activating sign up modal
    const signupForm = document.getElementById("signup");
    const signupModal = document.getElementById("signupModal");
    const closeBtn = document.getElementById("close_btn");

    signupForm.addEventListener("submit", function(e) {
        e.preventDefault(); 
        signupModal.classList.add("active"); 
    });

    // Close modal when clicking outside
    signupModal.addEventListener("click", function(e) {
        if (e.target === signupModal) {
            signupModal.classList.remove("active");
        }
    });

    // Close modal when clicking x button
    closeBtn.addEventListener("click", function(e){
        signupModal.classList.remove("active");
    })


    document.getElementById("signupForm").addEventListener("submit", function(e) {

        e.preventDefault();

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        const xhttp = new XMLHttpRequest();

        xhttp.onload = function() {
            document.getElementById("output").textContent = this.responseText;
        };

        xhttp.open("POST", "signup_logic.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(
            "email=" + encodeURIComponent(email) +
            "&password=" + encodeURIComponent(password)
        );
    });




    
}) 
























