// Typing Animation
const text = [
    "Selamat datang di website profil pribadi saya",
    "Saya menyukai dunia teknologi",
    "Desain",
    "dan pengembangan website modern"
];

let count = 0;
let index = 0;
let currentText = "";
let letter = "";

(function type(){

    if(document.querySelector(".typing")){

        if(count === text.length){
            count = 0;
        }

        currentText = text[count];

        letter = currentText.slice(0, ++index);

        document.querySelector(".typing").textContent = letter;

        if(letter.length === currentText.length){
            count++;
            index = 0;
        }

        setTimeout(type, 150);

    }

})();

// Page Transition
window.addEventListener("load", () => {
    document.body.classList.add("loaded");
});

document.querySelectorAll("a").forEach(link => {

    link.addEventListener("click", function(e){

        const href = this.getAttribute("href");

        if(
            href &&
            !href.startsWith("#") &&
            !href.startsWith("javascript")
        ){

            e.preventDefault();

            document.body.classList.add("fade-out");

            setTimeout(() => {
                window.location.href = href;
            }, 500);

        }

    });

});

// Hamburger Menu
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");

if(hamburger){

    hamburger.addEventListener("click", () => {

        hamburger.classList.toggle("active");

        navLinks.classList.toggle("active");

    });

}

// Particles
if(document.getElementById("particles")){

    tsParticles.load("particles", {

        background: {
            color: {
                value: "transparent"
            }
        },

        particles: {

            number: {
                value: 70
            },

            color: {
                value: "#38bdf8"
            },

            links: {
                enable: true,
                color: "#38bdf8"
            },

            move: {
                enable: true,
                speed: 1
            },

            size: {
                value: 3
            },

            opacity: {
                value: 0.5
            }

        }

    });

}