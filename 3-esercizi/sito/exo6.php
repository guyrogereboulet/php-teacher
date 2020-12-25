<?php
    include("commons/head.php");
    include("commons/menu.php");
?>


<h1>Calculer une moyenne </h1>
<form action="#" method="GET">
    <label for="nb">Combien de notes: </label>
    <input type="number" name="nb" id= "nb">
    <input type="submit" value="valider">
</form>














<?php 

if(isset($_GET["nb"]) && $_GET["nb"] > 0) {

    $nbNotes = $_GET["nb"];

    echo "<form action=\"#\" method=\"POST\">";
    echo "<fieldset>";
    echo "<legend>Moyenne : </legend>";

    for($i = 1; $i <= $nbNotes; $i++){

        echo "<label for=\"nb\">Note" .$i. " : </label>";
        echo "<input type=\"number\" name=\"note".$i."\" id=\"note" .$i."\" required><br>";

    }
    echo "<input type=\"submit\" value=\"Calculer\">";
    echo "</fieldset>";
    echo "</form>";

    if(isset($_POST["note1"])){

        $res = 0;
        for($i = 1; $i <= $nbNotes; $i++){

            $res =  $res + $_POST["note".$i];

        }
        echo "La moyenne est : ". $res / $nbNotes;

    }

   

} else {

     echo "<p>C'est ok</p>";

}






?>



<?php 
 include("commons/footer.php");
?>