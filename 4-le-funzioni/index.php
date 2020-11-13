<?php


$nomJoueur1 = "Guy"; //Variabile di tipo stringa
$ageJoueur1 = 33; //Variabile di tipo intero
$estUnHommeJoueur1 = true; //Variabile di tipo booleano

afficheCode($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1 );

$afficheCoucou = coucou(10, 15);

echo "</br>";

echo $afficheCoucou;



//Function

function test () {

    echo "<br/>";
    echo "coucou";
    echo "<br/>"; 
     
 }


 function afficheCode ($nom, $age, $homme) {

    echo "Nom du joueur 1 : ". $nom;
    echo "<br />";
    echo "Age du joueur 1 : ". $age;
    echo "<br />";
    $age = $age + 1;
    echo "Age du joueur 1 : ". $age;
    echo "<br />";
    if($homme === true) {

        echo "C'est un homme";
    } else {
        echo "C'est une femme";
    } 

 }


 function coucou ($a, $b) {

    $a;
    $b;
     return $a * $b;
 }




?>