<?php
    include("commons/head.php");
    include("commons/menu.php");

    // Mi permette di salvare un dato anche se mi sposto su un'altra pagina
    session_start();

    // se non esiste nella pagina la $_SESSION
    if(!isset($_SESSION["chiffreAleatoire"])) {
        //Con la funzione "rand" genero un nnumero aleatorio tra 2 estremi
        $_SESSION["chiffreAleatoire"] = rand(1,10);
    }

?>
<h1>Trouver le nombre choisi par l'ordinateur</h1>

<form action="#" method="POST">
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Reinitialiser">
</form>

<form action="#" method="POST">
    <label for="chiffre">Quel est le chiffre:</label>
    <input type="number" name="chiffre" id="chiffre"><br>
    <input type="submit" value="valider">
</form>







<?php 



$chiffre = $_POST["chiffre"];
$reinit = $POST["reinit"];
$chiffreAleatoire = $_SESSION["chiffreAleatoire"];


if(isset($reinit) && $reinit === "yes") {
    $chiffreAleatoire = rand(1,10);
}
// echo $chiffreAleatoire;




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