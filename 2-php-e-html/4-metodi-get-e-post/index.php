 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les bases de HTML/PHP</title>
    <link rel="stylesheet" href="main.css"> 
</head>
<body>
    <h1>I form</h1>
    <!-- Ci sono 2 metodi per inviare delle informazioni al server,
    metodo POST o GET -->
    <form action="#" method = "POST">
        <fieldset>
            <legend>Information</legend>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>
            <label for="age">Age :</label>
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

</body>
</html>