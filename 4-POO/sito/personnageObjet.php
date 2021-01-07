<?php

class Personnage {
    public $nom;
    public $age;
    public $sexe;
    public $force;
}




    include("commons/head.php");
    include("commons/menu.php");

   
?>

<h1>Personnage : </h1>

<?php 
 $p1 = new Personnage();
  echo "Nom : ".$p1->nom = "Guy";
  echo '<br>';
  echo "Age : ".$p1->age = 33;
  echo '<br>';
  echo "Sexe : ".$p1->sexe = true;
  echo '<br>';
  echo "force : ".$p1->force = 5;
?>


<?php 
 include("commons/footer.php");
?>