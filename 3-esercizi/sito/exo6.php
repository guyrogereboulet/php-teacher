<?php
    include("commons/head.php");
    include("commons/menu.php");
?>


<h1>Selection du personnage </h1>
<form action="#" method="POST">

<select name="personnage" id="personnage">
    <option value="homme">Homme</option>
    <option value="femme">Femme</option>
</select>
    <input type="submit" value="valider" name="valider">
</form>














<?php 

if(isset($_POST["valider"])){

            if(isset($_POST["personnage"])){

                echo "Ciao";

        }

}






?>



<?php 
 include("commons/footer.php");
?>