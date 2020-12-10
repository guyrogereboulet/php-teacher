<?php
include("commons/head.php");
include("commons/menu.php");
?>
<h1>Affichage d'une pyramide</h1>

<form action="#" method="POST">

<label for="hauteur">Rayon d'un code:</label>
    <input type="number" id="hauteur" name="hauteur">
<label for="perimetre">Perimètre</label>
    <input type="checkbox"  name="perimetre">
<label for="aire">Aire</label>
    <input type="checkbox"  name="aire">

<button type="submit">Envoyer</button>
</form>





<?php 

$hauteur = $_POST["hauteur"];



    if (isset($hauteur) && $hauteur > 0) {

        for ($i=0; $i < $hauteur; $i++) {
            //Ad ogni giro aggiungo la stinga $txt 
            $txt .= "**";
            echo $txt."<br>";
        }

        for ($i=0; $i < $hauteur-1; $i++) { 

            //Con substr riduco la lunghezza della stringa
            $txt = substr($txt,0,strlen($txt)-2);
            echo $txt."<br>";
        }


    

      //Altrimenti
    } else {
        echo "<h2>Saisir une valeur svp</h2>";
    }



?>



<?php 
 include("commons/footer.php");
?>