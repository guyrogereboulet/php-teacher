<?php
include("commons/head.php");
include("commons/menu.php");
?>
<h1>Trouver le nombre choisi par l'ordinateur</h1>

<form action="#" method="POST">
    <label for="chiffre">Quel est le chiffre:</label>
    <input type="number" name="chiffre" id="chiffre"><br>
    <input type="submit" value="valider">
</form>







<?php 

$chiffreAleatoire = 5;

$chiffre = $_POST["chiffre"];

if(isset($chiffre) && $chiffre > 0){

    // Con "int" trasformiamo la variabile in un numero.

    if($chiffre == (int)$chiffreAleatoire){

        echo "<h2>C'est gagné </h2>";
    } else {
        if($chiffre > (int)$chiffreAleatoire){
            echo "<h2>Le chiffre est plus grand</h2>";
        } else{
            echo "<h2>Le chiffre est plus pétit</h2>";
        }
    }



} else{

    echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";

}




?>



<?php 
 include("commons/footer.php");
?>