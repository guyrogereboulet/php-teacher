<?php
include("commons/head.php");
include("commons/menu.php");
?>
<h1>Affichage des tables de multiplication</h1>

<form action="#" method="get">

<label for="number">Table de Multiplication à afficher:</label>
<input type="number" id="number" name="number">
<button type="submit">Valider</button>
</form>





<?php 

$number = $_GET["number"];


    if (isset($number)) {

        echo "<br>";
        echo "Table de ". $number;
        echo "<br>";
        echo "<br>";

    for ($i = 1; $i <= 10; $i++) {

        echo $i ." * ". $number ." = ".$i * $number ."<br>";
    }
    } else {
        echo "<h2>Saisir une valeur svp</h2>";
    }



?>



<?php 
 include("commons/footer.php");
?>