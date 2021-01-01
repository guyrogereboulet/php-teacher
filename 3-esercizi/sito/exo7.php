<?php
    include("commons/head.php");
    include("commons/menu.php");
?>


<h1>Tableaux</h1>

<h2>Etape 1</h2>
<p>Réaliser un tableaux concernant les valeurs: </p>

<h2>Etape 2</h2>
<p>Réaliser une fonction qui vérifie si un tableau contient que des valeurs paires ou non </p>

<h2>Etape 3</h2>
<p>Affiche un message pour indiquer à l'utilisateur </p>



<?php 

    $array = [2,6,8,10,12,14];

    echo "<h2>Résultat: </h2>";
    if(checkTableau($array)) {
        echo "Le tableau ne contient que des valeurs paires";
    } else{
        echo "Le tableau contient des valeus impaires";
    }



    function checkTableau($array) {

        for ($i=0; $i <= count($array)-1; $i++) { 
            if ($array[$i] % 2 !== 0) {

                return false;

                

            }
        }
        return true;

        
    }

?>

<?php 
 include("commons/footer.php");
?>