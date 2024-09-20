import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Compteur automatique chiffres marquants (vue accueil)
document.addEventListener('DOMContentLoaded', () => {

    // Fonction pour faire le comptage pour chaque élément
    function startCounter(counterElement) {
        const targetValue = parseInt(counterElement.getAttribute('data-target'), 10);
        let currentValue = 0;
        const interval = 10; 
        const increment = Math.ceil(targetValue / 100); 

        function updateCounter() {
            if (currentValue < targetValue) {
                currentValue += increment; 
                if (currentValue > targetValue) currentValue = targetValue; 
                counterElement.innerHTML = currentValue + '%'; 
            } else {
                clearInterval(intervalId); 
            }
        }

        const intervalId = setInterval(updateCounter, interval);
    }

    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        startCounter(counter);
    });
});


// Caroussel des membres de l'équipe (vue nous découvrir)

document.addEventListener('DOMContentLoaded', function() {
    let defaultTransform = 0;

    function goNext() {
        defaultTransform = defaultTransform - 398;
        let slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }

    function goPrev() {
        let slider = document.getElementById("slider");
        if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
        else defaultTransform = defaultTransform + 398;
        slider.style.transform = "translateX(" + defaultTransform + "px)";
    }

    let next = document.getElementById("next");
    let prev = document.getElementById("prev");

    if (next) {
        next.addEventListener("click", goNext);
    }

    if (prev) {
        prev.addEventListener("click", goPrev);
    }
});


// Caroussel 3D (vue accueil)

// $(document).ready(function() {
//     var carousel = $(".carousel"),
//         currdeg = 0,
//         itemCount = $(".item").length,
//         degreeIncrement = 300 / itemCount; 
    

//     $(".next").on("click", { d: "n" }, rotate);
//     $(".prev").on("click", { d: "p" }, rotate);

//     function rotate(e) {
//         if (e.data.d === "n") {
//             currdeg -= degreeIncrement; 
//         } else if (e.data.d === "p") {
//             currdeg += degreeIncrement; 
//         }

   
//         if (currdeg <= -300) {
//             currdeg = 0;
//         } else if (currdeg > 0) {
//             currdeg = -300 * (itemCount - 1);
//         }

//         carousel.css({
//             "-webkit-transform": "rotateY(" + currdeg + "deg)",
//             "-moz-transform": "rotateY(" + currdeg + "deg)",
//             "-o-transform": "rotateY(" + currdeg + "deg)",
//             "transform": "rotateY(" + currdeg + "deg)"
//         });
//     }
// });



$(document).ready(function() {
    var carousel = $(".carousel"),
        currdeg = 0,
        itemCount = $(".item").length,
        degreeIncrement = 360 / itemCount;  

    $(".next").on("click", { d: "n" }, rotate);
    $(".prev").on("click", { d: "p" }, rotate);

    function rotate(e) {
        if (e.data.d === "n") {
            currdeg -= degreeIncrement; 
        } else if (e.data.d === "p") {
            currdeg += degreeIncrement; 
        }


        if (currdeg <= -360) {
            currdeg = 0;
        } else if (currdeg > 0) {
            currdeg = -360 * (itemCount - 1);
        }

        carousel.css({
            "transform": "rotateY(" + currdeg + "deg)"
        });
    }
});
  
