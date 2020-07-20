// Partie 1:  Déclaration des variables du programme
//*************************************************

let scoresGlobals = [0, 0];  // score globaux des 2 joueurs
let scoreEnCours = 0;        // score d'une série en cours
let joueurActif = 1;         // N° du joueur qui a la main ( 1 ou 2 )
let jouer = true;

// Partie 2:  Initialisation du jeu
//++++++++++++++++++++++++++++++++++++++

initialiseLeJeu();
    /*
document.getElementById("score-1").textContent = '0';
document.getElementById('score-2').textContent = '0';
document.getElementById('encours-1').textContent = '0';
document.getElementById('encours-2').textContent = '0';
document.querySelector('.de').style.display = 'none';
*/

//Partie 3:  Gestion du click sur le bouton 'Lancer le De'
//++++++++++++++++++++++++++++++++++++++++++++++++++++

let btnLancezLeDe = document.querySelector(`.btn-lancer`);
btnLancezLeDe.addEventListener('click', function () {
    if (jouer){
        let de = Math.floor(Math.random() * 6) + 1;
        console.log(de);

        let domDe = document.querySelector('.de');
        domDe.style.display = 'block';
        domDe.src = `resources/images/de-${de}.png`;

        // mise à jour du score en cours du joueur actif
        if (de !== 1) {
            scoreEnCours += de;
            document.getElementById(`encours-${joueurActif}`).textContent = scoreEnCours;
        } else {
            joueurSuivant(); // appel de la fonction joueurSuivant() pour passer la main
        }
    }
});
    /*
    joueurActif === 1 ? joueurActif = 2 : joueurActif = 1;   // on passe la main à l'autre joueur
    scoreEnCours = 0;  // reinitialisation à 0 du score en cours
    document.getElementById(`encours-${joueurActif}`).textContent = '0';

    // Mise à jour du voyant actif pour le joueur actif
        //Toggles between a class name for an element.
    The first parameter removes the specified class from an element, and returns false.
    If the class does not exist, it is added to the element, and the return value is true.

    document.querySelector('.joueur-1-panel').classList.toggle('active');
    document.querySelector('.joueur-2-panel').classList.toggle('active');
    document.querySelector('.de').style.display = 'none';
    */

// Partie 4:  Gestion du clic sur le bouton "Commutez"
//+++++++++++++++++++++++++++++++++++++++++++++++++++

let btnCommutez = document.querySelector(`.btn-commuter`);
btnCommutez.addEventListener('click', function () {
    if (jouer){
        scoresGlobals[joueurActif - 1] += scoreEnCours;  // Mise à jour du tableau scoreGlobals = [score-1,score-2]
        document.getElementById(`score-${joueurActif}`).textContent = scoresGlobals[joueurActif - 1];

        //On vérifie si le joueur a atteint le score gagnant
        if (scoresGlobals[joueurActif - 1] >= 100) {
            document.getElementById(`nom-${joueurActif}`).textContent = 'Bravo !!!';
            document.querySelector('.de').style.display = 'none';
            document.querySelector(`.joueur-${joueurActif}-panel`).classList.add(`vainqueur`);
            document.querySelector(`.joueur-${joueurActif}-panel`).classList.remove('active');
            jouer = false;
        } else {
            joueurSuivant();
        }
    }
});
// Mise à jour du score global du joueur actif
    /*
    (joueurActif === 1) ? (joueurActif = 2) : (joueurActif = 1);  // le joueur actif passe la main à l'autre joueur
    scoreEnCours = 0;
    document.getElementById(`encours-${joueurActif}`).textContent = '0';
    document.querySelector('joueur-1-panel').classList.toggle('active');
    document.querySelector('joueur-2-panel').classList.toggle('active');  //activation ou deactivation du voyant de joueur actif
    document.querySelector('.de').style.display = 'none';  // on masque l'affichage du Dé
    */

// Partie 5:  Implémentation de la fonction joueurSuivant() Cette fonction permet de passer la main
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function joueurSuivant() {
    (joueurActif === 1) ? (joueurActif = 2) : (joueurActif = 1);
    scoreEnCours = 0;
    document.getElementById(`encours-${joueurActif}`).textContent = '0';
    document.querySelector(`.joueur-1-panel`).classList.toggle('active');
    document.querySelector(`.joueur-2-panel`).classList.toggle('active');
    document.querySelector('.de').style.display = 'none';
}

// Partie 6  Gestion du clic sur le bouton Nouveau Jeu
//+++++++++++++++++++++++++++++++++++++++++++++++++++

let btnNouveauJeu = document.querySelector('.btn-nouveau');
btnNouveauJeu.addEventListener('click', () => {
    initialiseLeJeu();
});
    /*
    scoresGlobals = [0,0];
    scoreEnCours = 0;
    joueurActif = 1;

    document.querySelector('.de').style.display = 'none';
    document.getElementById(`score-1`).textContent = '0';
    document.getElementById(`score-2`).textContent = '0';
    document.getElementById(`encours-1`).textContent = '0';
    document.getElementById(`encours-2`).textContent = '0';
    */

// Partie 7:  Implementation de la fonction initialiseLeJeu()
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++

function initialiseLeJeu() {
    scoresGlobals = [0, 0];
    scoreEnCours = 0;
    joueurActif = 1;

    document.getElementById('score-1').textContent = '0';
    document.getElementById('score-2').textContent = '0';
    document.getElementById('encours-1').textContent = '0';
    document.getElementById('encours-2').textContent = '0';
    document.querySelector('.de').style.display = 'none';
    document.getElementById('nom-1').textContent = 'Joueur 1';
    document.getElementById('nom-2').textContent = 'Joueur 2';

    //Il faut gérer l'erreur dans la console portant sur "classList"
    document.querySelector('.joueur-1-panel').classList.remove('vainqueur');
    document.querySelector('.joueur-2-panel').classList.remove('vainqueur');
    document.querySelector('.joueur-1-panel').classList.add('active');
    //document.querySelector('joueur-2-panel').classList.remove('active');
}

    // Code jQuery
    //+++++++++++
/*
$(document).ready(function () {
    $('.btn-nouveau').click(function () {
       $('this').hide();
        //$('*').style.display = 'none';
    });

});
*/
