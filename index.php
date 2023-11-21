<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Censura la parola</h1>
    <h4>Scegli una parola da censurare e quella con cui sostituirla</h4>
    <form action="text.php" method="POST">
        <input type="text" name="replaced_word" placeholder="parola da cambiare">
        <input type="text" name="replacing_word" placeholder="parola sostitutiva">
        <input type="submit" value="Invia">
    </form>
</body>

<?php



?>
</html>