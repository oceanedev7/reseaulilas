import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

        // Premier compteur
        var depart1 = 0;
        const arrivee1 = 90;
        const interval1 = 10;

        // Deuxième compteur
        var depart2 = 0;
        const arrivee2 = 14;
        const interval2 = 50;

        // Troisième compteur
        var depart3 = 0;
        const arrivee3 = 11;
        const interval3 = 70;

        function augmenter1() {
            if (depart1 < arrivee1) {
                depart1++;
                document.getElementById("counter1").innerHTML = depart1;
            } else {
                clearInterval(intervalId1);
            }
        }

        function augmenter2() {
            if (depart2 < arrivee2) {
                depart2++;
                document.getElementById("counter2").innerHTML = depart2;
            } else {
                clearInterval(intervalId2);
            }
        }

        function augmenter3() {
            if (depart3 < arrivee3) {
                depart3++;
                document.getElementById("counter3").innerHTML = depart3;
            } else {
                clearInterval(intervalId3);
            }
        }

        // Utilisation de setInterval pour chaque compteur
        const intervalId1 = setInterval(augmenter1, interval1);
        const intervalId2 = setInterval(augmenter2, interval2);
        const intervalId3 = setInterval(augmenter3, interval3);
