<?php

class Personnage {
    public $nom = "Guy";
    public $age = 33;
    public $sexe = true;
    public $force = 5;
}




    include("commons/head.php");
    include("commons/menu.php");

   
?>

<h1>Personnage : </h1>

<?php 
 $p1 = new Personnage();
  echo "Nom : ".$p1->nom ."<br>";
  echo "Age : ".$p1->age."<br>";
//   echo "Sexe : ".$p1->sexe."<br>";
  if ($p1->sexe){
    echo "Sexe: Homme<br>";
}
  echo "Force : ".$p1->force."<br>";

 $p2 = new Personnage();
?>



<?php 
 include("commons/footer.php");
?>