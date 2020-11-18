
<?php
include("commons/head.php");
include("commons/menu.php");
?>

    <h1>I form</h1>
    <!-- Ci sono 2 metodi per inviare delle informazioni al server,
    metodo POST o GET -->
    <form action="#" method = "POST">
        <fieldset>
            <legend>Information</legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
            <label for="nom">Age :</label>
            <input type="number" name="age" id="age" required>
            <input type="submit" value="envoyer">
        </fieldset>
    </form>

    <?php 
    //Con la funzione isset controllo che l'informazione non sia vuota
    if(isset($_POST["nom"])) {
    
        echo "<div class ='backgroundColorGreen'>";
            echo "Le nom est :" .$_POST["nom"]. "<br>";

            if(isset($_POST["age"])) {

            echo " L'age est :" .$_POST["age"];
        }

       echo "</div>";

    }
    
    ?>

<?php 
 include("../commons/footer.php");
?>