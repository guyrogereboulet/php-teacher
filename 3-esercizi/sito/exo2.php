<?php
include("commons/head.php");
include("commons/menu.php");
?>
<h1>Affichage d'une pyramide</h1>

<form action="#" method="POST">

<label for="hauteur">Hauteur de la pyramyde:</label>
<input type="number" id="hauteur" name="hauteur">
<button type="submit">Valider</button>
</form>





<?php 

$hauteur = $_POST["hauteur"];



    if (isset($hauteur) && $hauteur > 0) {

        for ($i=0; $i < $hauteur; $i++) { 
            $txt .= "**";
            echo $txt."<br>";
        }

        for ($i=0; $i < $hauteur-1; $i++) { 

            //Con substr riduco la lunghezza della stringa
            $txt = substr($txt,0,strlen($txt)-2);
            echo $txt."<br>";
        }


    

   
    } else {
        echo "<h2>Saisir une valeur svp</h2>";
    }



?>



<?php 
 include("commons/footer.php");
?>