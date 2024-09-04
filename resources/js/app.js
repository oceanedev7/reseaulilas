import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Compteur automatique chiffres marquants (vue accueil)

        // Premier compteur
        var depart1 = 0;
        const arrivee1 = 35;
        const interval1 = 10;

        // Deuxième compteur
        var depart2 = 0;
        const arrivee2 = 48;
        const interval2 = 10;

        // Troisième compteur
        var depart3 = 0;
        const arrivee3 = 89;
        const interval3 = 10;

        function augmenter1() {
            if (depart1 < arrivee1) {
                depart1++;
                document.getElementById("counter1").innerHTML = depart1 + '%';
            } else {
                clearInterval(intervalId1);
            }
        }

        function augmenter2() {
            if (depart2 < arrivee2) {
                depart2++;
                document.getElementById("counter2").innerHTML = depart2  + '%';
            } else {
                clearInterval(intervalId2);
            }
        }

        function augmenter3() {
            if (depart3 < arrivee3) {
                depart3++;
                document.getElementById("counter3").innerHTML = depart3  + '%';
            } else {
                clearInterval(intervalId3);
            }
        }

        // Utilisation de setInterval pour chaque compteur
        const intervalId1 = setInterval(augmenter1, interval1);
        const intervalId2 = setInterval(augmenter2, interval2);
        const intervalId3 = setInterval(augmenter3, interval3);


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

$(document).ready(function() {
    var carousel = $(".carousel"),
        currdeg = 0,
        itemCount = $(".item").length,
        degreeIncrement = 300 / itemCount; 
    

    $(".next").on("click", { d: "n" }, rotate);
    $(".prev").on("click", { d: "p" }, rotate);

    function rotate(e) {
        if (e.data.d === "n") {
            currdeg -= degreeIncrement; 
        } else if (e.data.d === "p") {
            currdeg += degreeIncrement; 
        }

   
        if (currdeg <= -300) {
            currdeg = 0;
        } else if (currdeg > 0) {
            currdeg = -300 * (itemCount - 1);
        }

        carousel.css({
            "-webkit-transform": "rotateY(" + currdeg + "deg)",
            "-moz-transform": "rotateY(" + currdeg + "deg)",
            "-o-transform": "rotateY(" + currdeg + "deg)",
            "transform": "rotateY(" + currdeg + "deg)"
        });
    }
});





