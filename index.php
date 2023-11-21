<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Censura la parola</h1>
    <h4>Scegli una parola da censurare</h4>
    <form action="text.php" method="POST">
        <input type="text" name="replaced_word" placeholder="scrivi una parola">
        <input type="submit" value="Invia">
    </form>
</body>

<?php


//var_dump([1,2,3]);
?>
</html>