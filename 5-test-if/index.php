<?php


$nomJoueur1 = "Guy"; //Variabile di tipo stringa
$ageJoueur1 = "33"; //Variabile di tipo intero
$estUnHommeJoueur1 = true; //Variabile di tipo booleano


$nomJoueur2 = "Leila"; //Variabile di tipo stringa
$ageJoueur2 = "32"; //Variabile di tipo intero
$estUnHommeJoueur2 = false; //Variabile di tipo booleano

afficheJoueur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1 );
echo "<br>";
afficheJoueur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2 );





//Function
function afficheJoueur ($nom, $age, $homme) {

    echo "Nom du joueur: ". $nom;
    echo "<br />";
    echo "Age du joueur: ". $age;
    echo "<br />";
    $age = $age + 1;
    echo "Age du joueur: ". $age;
    echo "<br />";
    if($homme === true) {

        echo "C'est un homme";
    } else {
        echo "C'est une femme";
    } 

 }


?>