<?php
    include("commons/head.php");
    include("commons/menu.php");

    $p1 = [
     "Nom" =>  "Luke", 
     "Age" => 27, 
     "Sexe" => true,
     "Force" => 5
    ];
    $p2 = [
     "Nom" =>  "Guy", 
     "Age" => 33, 
     "Sexe" => true,
     "Force" => 7
    ];
    $p3 = [
     "Nom" =>  "Rose", 
     "Age" => 29, 
     "Sexe" => false,
     "Force" => 6
    ];


    $persos = [$p1, $p2, $p3];
   
?>




<h1>Personnage </h1>





<?php 

 foreach($persos as $perso) {

    afficherPerso($perso);

    echo "<br>";

 }





    // if(!isset($_POST["personnage"]) || $_POST["personnage"] === "p1") {
    //     afficherPerso($p1);
    // } 
    // else if($_POST["personnage"] === "p2") {
    //     afficherPerso($p2);
    // }
    // else if($_POST["personnage"] === "p3") {
    //     afficherPerso($p3);
    // }


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

        // echo "nom :". $tableau[0] ."<br>";
        // echo "age :". $tableau[1] ."<br>";

        // if($tableau[2]) {

        //     echo "sexe : homme <br>";

        // } else {
        //     echo "sexe : femme <br>";
        // }
        
        // echo "force:". $tableau[3] ."<br>";
        

        
    }








?>

<?php 
 include("commons/footer.php");
?>