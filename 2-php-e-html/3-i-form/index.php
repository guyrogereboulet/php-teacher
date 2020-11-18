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
    <form action="#">

    <fieldset>
        <legend>Information</legend>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" required>
        <label for="nom">Age :</label>
        <input type="number" name="age" id="age" required>
        <input type="submit" value="envoyer">
    </fieldset>
        <label for="msg">Message: </label>
        <textarea name="msg" id="msg" cols="30" rows="10">

        </textarea>
    </form>

</body>
</html>