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

// document.addEventListener('DOMContentLoaded', function() {
//     let defaultTransform = 0;

//     function goNext() {
//         defaultTransform = defaultTransform - 398;
//         let slider = document.getElementById("slider");
//         if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
//         slider.style.transform = "translateX(" + defaultTransform + "px)";
//     }

//     function goPrev() {
//         let slider = document.getElementById("slider");
//         if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
//         else defaultTransform = defaultTransform + 398;
//         slider.style.transform = "translateX(" + defaultTransform + "px)";
//     }

//     let next = document.getElementById("next");
//     let prev = document.getElementById("prev");

//     if (next) {
//         next.addEventListener("click", goNext);
//     }

//     if (prev) {
//         prev.addEventListener("click", goPrev);
//     }
// });

document.addEventListener('DOMContentLoaded', function() {
    let defaultTransform = 0;

    function goNext() {
        let slider = document.getElementById("slider");
        let cardWidth = slider.querySelector('div').offsetWidth; // Prendre la largeur d'une carte
        let visibleWidth = slider.parentElement.offsetWidth; // Largeur visible du conteneur
        let totalWidth = slider.scrollWidth; // Largeur totale du contenu

        // Si nous n'avons pas atteint la fin du slider, continuer de défiler
        if (Math.abs(defaultTransform) + visibleWidth < totalWidth) {
            defaultTransform -= cardWidth + 20; // Ajuster pour l'espace entre les cartes (gap-14)
        } else {
            // Revenir au début seulement après avoir affiché toutes les cartes
            defaultTransform = 0;
        }

        slider.style.transform = `translateX(${defaultTransform}px)`;
    }

    function goPrev() {
        let slider = document.getElementById("slider");
        let cardWidth = slider.querySelector('div').offsetWidth; // Prendre la largeur d'une carte

        // Si on n'est pas au début, défiler vers la gauche
        if (Math.abs(defaultTransform) > 0) {
            defaultTransform += cardWidth + 20; // Ajuster pour l'espace entre les cartes (gap-14)
        }

        slider.style.transform = `translateX(${defaultTransform}px)`;
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
  
//Défilement des logos (vue accueil)

document.addEventListener("DOMContentLoaded", function() {
    const caroussel = document.getElementById('caroussel');
    const logos = caroussel.querySelectorAll('img');
    
    
    let totalWidth = 0;
    logos.forEach(logo => {
        totalWidth += logo.offsetWidth + parseInt(window.getComputedStyle(logo).marginRight) * 2;
    });


    caroussel.style.width = `${totalWidth}px`;

   
    let animationDuration = 30;
    caroussel.animate(
        [
            { transform: 'translateX(0)' },
            { transform: `translateX(-${totalWidth / 2}px)` } 
        ],
        {
            duration: animationDuration * 1000, 
            iterations: Infinity,
            easing: 'linear' 
        }
    );
});