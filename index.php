<?php
// file che gestisce i dati del form 
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>PHP Badwords</title>
</head>

<body>
    <form action="greetings.php" method="get">
        <h2>Paragrafo:</h2>
        <textarea name="paragraph"></textarea>
        <h2>Parola da censurare:</h2>
        <input type="text" name="badword">
        <button type="submit">Invia</button>
    </form>
</body>

</html>