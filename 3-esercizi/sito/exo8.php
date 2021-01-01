<?php
    include("commons/head.php");
    include("commons/menu.php");

    $p1 = ["Luke", 27, true, 5.4];
    $p2 = ["Guy", 33, true, 5.4];
    $p3 = ["Rose", 29, false, 5.4];
   
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

            if(isset($_POST["personnage"]) && $_POST["personnage"] === "homme"){

                echo "Homme";

            } else {
                echo "Femme";
                
            }

}






?>

<?php 
 include("commons/footer.php");
?>