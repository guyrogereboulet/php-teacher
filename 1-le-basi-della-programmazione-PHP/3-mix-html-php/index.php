<?php 

$nomJoueur1 = "Guy"; //Variabile di tipo stringa
$ageJoueur1 = 33; //Variabile di tipo intero
$estUnHommeJoueur1 = true; //Variabile di tipo booleano


?>

<h1>Nom du joueur 1 : <?php echo $nomJoueur1; ?> </h1>
<br/>
Age du joueur 1 : <?php echo $ageJoueur1;?>
<br/>
<?php $ageJoueur1 += 1;?>

Age du joueur 1 : <?php echo $ageJoueur1; ?>
<br/>


<?php 
if($estUnHommeJoueur1 === true) {
?>
    C'est un homme
<?php } else { ?>
    C'est une femme
 <?php } ?>

