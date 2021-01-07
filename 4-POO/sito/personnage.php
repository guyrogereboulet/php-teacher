<?php
    include("commons/head.php");
    include("commons/menu.php");

    $p1 = [
     "Nom" =>  "Luke", 
     "Age" => 27, 
     "Sexe" => true,
     "Force" => 5
    ];
    // $p2 = [
    //  "Nom" =>  "Guy", 
    //  "Age" => 33, 
    //  "Sexe" => true,
    //  "Force" => 7
    // ];
    // $p3 = [
    //  "Nom" =>  "Rose", 
    //  "Age" => 29, 
    //  "Sexe" => false,
    //  "Force" => 6
    // ];

   
?>




<h1>Personnage </h1>





<?php 



    afficherPerso($p1);

    echo "<br>";



    function afficherPerso ($tableau) {

        foreach($tableau as $index => $value) {

            if ($index !== "Sexe") {

                echo "<b>".$index."</b>: ".  $value . "<br>";

            }

            

            if ($index === "Sexe") {

                echo "<b>Sexe </b>";

                if($value) {
                    echo "Homme <br>";

                } else {
                    echo "Femme <br>";

                }



            }

        }


        
    }








?>

<?php 
 include("commons/footer.php");
?>