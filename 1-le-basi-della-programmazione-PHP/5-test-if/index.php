<?php


$nomJoueur1 = "Guy"; //Variabile di tipo stringa
$ageJoueur1 = 33; //Variabile di tipo intero
$estUnHommeJoueur1 = true; //Variabile di tipo booleano


$nomJoueur2 = "Leila"; //Variabile di tipo stringa
$ageJoueur2 = 32; //Variabile di tipo intero
$estUnHommeJoueur2 = false; //Variabile di tipo booleano

afficheJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1 );
// echo "<br>";
sauteLigne();
afficheJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2 );
sauteLigne();
ageSuperieur($ageJoueur1, $ageJoueur2);







//Function
function afficheJoueur ($nom, $age, $homme) {

    echo "Nom du joueur: ". $nom;
    echo "<br />";
    echo "Age du joueur: ". $age;
    echo "<br />";
    if($homme === true) {

        echo "C'est un homme";
    } else {
        echo "C'est une femme";
    } 

 }


 function ageSuperieur($ageJoueur1, $ageJoueur2) {

    if($ageJoueur1 > $ageJoueur2) {

      echo "Le premier joueur est plus agé";

    } else {

        echo "Le deuxième joueur est plus agé";

    }
 }


 function sauteLigne () {
     echo "<br>";

     echo "----------------------------------";

     echo "<br>";
 }

?>