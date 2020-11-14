<?php

/*Variabile costante che per 
covenzione si scrive in maiuscolo:
- Nel primo argomento metto il nome della variabile in maiuscolo
- Nel secondo argomento il contenuto della variabile
*/
define("SEPARATEUR", "+");


$nomJoueur1 = "Guy"; //Variabile di tipo stringa
$ageJoueur1 = 33; //Variabile di tipo intero
$estUnHommeJoueur1 = true; //Variabile di tipo booleano


$nomJoueur2 = "Leila"; //Variabile di tipo stringa
$ageJoueur2 = 32; //Variabile di tipo intero
$estUnHommeJoueur2 = false; //Variabile di tipo booleano

$separateur = "-";


//Instruction
afficheJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1 );
sauteLigne(SEPARATEUR);
afficheJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2 );
sauteLigne(SEPARATEUR);
ageSuperieur($ageJoueur1, $ageJoueur2);
sauteLigne(SEPARATEUR);
$differenceAge = differenceAge($ageJoueur1, $ageJoueur2);

echo "La difference d'age est de: ".$differenceAge;





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


 function sauteLigne ($separateur) {

    echo "<br>";
    for ($i = 0; $i < 50; $i++) {
     echo $separateur ;
    }
    echo "<br>";
 }


 function differenceAge($ageJoueur1, $ageJoueur2) {

    $resultat = $ageJoueur1 - $ageJoueur2;

    if($resultat < 0) {
        $resultat = -$resultat;
    }
 
    return $resultat;

 }


?>