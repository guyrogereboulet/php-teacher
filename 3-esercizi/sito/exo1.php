<?php
include("commons/head.php");
include("commons/menu.php");
?>
<h1>Affichage des tables de multiplication</h1>

<h2>Table de 4</h2>

<?php 
$quattre = 4;


multiplication(0, $quattre);
multiplication(1, $quattre);
multiplication(2, $quattre);
multiplication(3, $quattre);
multiplication(4, $quattre);
multiplication(5, $quattre);
multiplication(6, $quattre);
multiplication(7, $quattre);
multiplication(8, $quattre);
multiplication(9, $quattre);
multiplication(10, $quattre);

function multiplication($number1, $number2) {

    $result = $number1 * $number2;


    //Print resultat
    echo $number1."*".$number2." = ".$result."<br>";
    

}


?>



<?php 
 include("commons/footer.php");
?>