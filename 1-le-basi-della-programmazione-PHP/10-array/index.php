 <?php

/*Variabile costante che per 
covenzione si scrive in maiuscolo:
- Nel primo argomento metto il nome della variabile in maiuscolo
- Nel secondo argomento il contenuto della variabile
*/
define("SEPARATEUR", "+");

$jouer1 = ["Guy", 18, true ];
$jouer2 = ["Leila", 15, false];


//Ci permette di stampare a video l'array
print_r($jouer1);
 

$separateur = "-";


//Instruction
afficherTableau($jouer1);
// afficheJoueur($jouer1[0], $jouer1[1], $jouer1[2]);
sauteLigne(SEPARATEUR);
// afficheJoueur($jouer2[0], $jouer2[1], $jouer2[2]);
afficherTableau($jouer2);
sauteLigne(SEPARATEUR);
ageSuperieur($jouer1[1], $jouer2[1]);
sauteLigne(SEPARATEUR);
$differenceAge = differenceAge($jouer1[1], $jouer2[1 ]);
echo "La difference d'age est de: ".$differenceAge;
sauteLigne(SEPARATEUR);
afficherAge($jouer1[1]);
sauteLigne(SEPARATEUR);
afficherAge($jouer2[1]);





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
    // for ($i = 0; $i < 50; $i++) {
    //  echo $separateur ;
    // }


    //Cicle While
    $i = 0;

    while( $i < 50) {
        echo $separateur ;
        $i++;
    }
    echo "<br>";

    //Cicle Do While
    // $i = 0;
    // do{
    //     $i++;
    //     echo $separateur;

    // } while( $i < 50);
    // echo "<br>";

    
 }


 function differenceAge($ageJoueur1, $ageJoueur2) {

    $resultat = $ageJoueur1 - $ageJoueur2;

    if($resultat < 0) {
        $resultat = -$resultat;
    }
 
    return $resultat;

 }


 function afficherAge($age) {

    // if ($age > 18) {
    //     echo $age;
    //     echo "<br />";
    //     echo "il est majeur";
    // }
    // else if ($age === 18) {
    //     echo $age;
    //     echo "<br />";
    //     echo "il est juste majeur";
    // }
    // else {
    //     echo $age;
    //     echo "<br />";
    //     echo "il est mineur";

    // }


    switch($age) {

        case 18: echo "il a 18 ans";
         break;
        case 19: echo "il a 19 ans";
         break;
        case 20: echo "il a 20 ans";
         break;
        case 21: echo "il a 21 ans";
         break;
        default: echo "je ne sais pas du tout";
    }

 };


 function afficherTableau($tab) {

    // $tabLength = count($tab);

    // for ($i=0; $i < $tabLength; $i++) { 
    //     echo $tab[$i];
    //     sauteLigne(SEPARATEUR);
    // }

    //Usando il foreach abbiamo come "key" l'indice dell'array mentre cone $value abbiamo il contenuto dell'array
    foreach ($tab as $key => $value) {
        echo $key.":" .$value;
        echo "<br />";
    }
 }

?> 