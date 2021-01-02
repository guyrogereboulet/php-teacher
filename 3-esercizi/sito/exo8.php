<?php
    include("commons/head.php");
    include("commons/menu.php");

    $p1 = ["Luke", 27, true, 5,2];
    $p2 = ["Guy", 33, true, 7,4];
    $p3 = ["Rose", 29, false, 6,5];
   
?>




<h1>Selection du personnage </h1>
<form action="#" method="POST">

<select name="personnage" id="personnage">
    <option value="p1" <?php if(isset($_POST["personnage"]) && $_POST["personnage"] === "p1") echo "selected" ?> >Luke</option>
    <option value="p2" <?php if(isset($_POST["personnage"]) && $_POST["personnage"] === "p2") echo "selected" ?> >Guy</option>
    <option value="p3" <?php if(isset($_POST["personnage"]) && $_POST["personnage"] === "p3") echo "selected" ?> >Rose</option>
</select>
    <input type="submit" value="valider" name="valider">
</form>


<?php 

if(isset($_POST["valider"])){

            if(isset($_POST["personnage"]) && $_POST["personnage"] === "p1") {
                echo "p1";
            } 
            else if(isset($_POST["personnage"]) && $_POST["personnage"] === "p2") {
                echo "p2"; 
            }
            else if(isset($_POST["personnage"]) && $_POST["personnage"] === "p3") {
                echo "p3"; 
            }


}






?>

<?php 
 include("commons/footer.php");
?>