<?php
    include("commons/head.php");
    include("commons/menu.php");

    $p1 = ["Luke", 27, true, 5];
    $p2 = ["Guy", 33, true, 7];
    $p3 = ["Rose", 29, false, 6];
   
?>




<h1>Selection du personnage </h1>
<form action="#" method="POST">

<label for="personnage">Personnage: </label>
    <!-- Con onChange = "submit" possiamo omettere input type= "submit"  -->
    <select name="personnage" id="personnage" onChange = "submit()">
        <option value="p1" <?php if(isset($_POST["personnage"]) && $_POST["personnage"] === "p1") echo "selected" ?> >Luke</option>
        <option value="p2" <?php if(isset($_POST["personnage"]) && $_POST["personnage"] === "p2") echo "selected" ?> >Guy</option>
        <option value="p3" <?php if(isset($_POST["personnage"]) && $_POST["personnage"] === "p3") echo "selected" ?> >Rose</option>
    </select>
    <!-- <input type="submit" value="valider"> -->
</form>




<?php 



    if(!isset($_POST["personnage"]) || $_POST["personnage"] === "p1") {
        afficherPerso($p1);
    } 
    else if($_POST["personnage"] === "p2") {
        afficherPerso($p2);
    }
    else if($_POST["personnage"] === "p3") {
        afficherPerso($p3);
    }


    function afficherPerso ($tableau) {

        echo "nom :". $tableau[0] ."<br>";
        echo "age :". $tableau[1] ."<br>";

        if($tableau[2]) {

            echo "sexe : homme <br>";

        } else {
            echo "sexe : femme <br>";
        }
        
        echo "force:". $tableau[3] ."<br>";
        

        
    }








?>

<?php 
 include("commons/footer.php");
?>