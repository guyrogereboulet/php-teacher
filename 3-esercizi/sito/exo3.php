<?php
include("commons/head.php");
include("commons/menu.php");
?>
<h1>Cercle - Périmètre et Aire</h1>

<form action="#" method="POST">

<label for="rayon">Rayon:</label>
    <input type="number" id="rayon" name="rayon"><br>
<label for="perimetre">Périmètre:</label>
    <input type="checkbox"  name="perimetre" id="perimetre" checked ><br>
<label for="aire">Aire:</label>
    <input type="checkbox"  name="aire" id="aire" checked><br>

<button type="submit">Envoyer</button>
</form>





<?php 

$rayon = $_POST["rayon"];
$perimetre = $_POST["perimetre"];
$aire = $_POST["aire"];



    if (isset($rayon) && $rayon > 0) {

        echo "<h2> Résultats </h2>";

        echo "<p>";

        if (isset($perimetre)) {
             echo "Le perimetre d'un cercle de rayon : <b>". $rayon . "</b> est: <b>".($rayon*2*pi()) . "</b></br>";
        }
        if (isset($aire)) {
             echo "L'aire d'un cercle de rayon : <b>". $rayon . "</b> est: <b>".($rayon*$rayon*pi()) . "</b></br>";
        }

        echo "</p>";


        

      //Altrimenti
    } else {
        echo "<h2>Saisir une valeur svp</h2>";
    }



?>



<?php 
 include("commons/footer.php");
?>