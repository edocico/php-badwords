<?php 

$text = 'Bastoni salterà sicuramente le partite con Juventus e Benfica: poi le sue condizioni saranno valutate nuovamente al fine di capire se sarà possibile averlo per la partita con il Napoli, o in quella successiva con l’Udinese. Una perdita per Inzaghi che dovrà affrontare gare fondamentali in campionato senza uno dei suoi titolari. Ma anche per i fantallenatori che dovranno fare a meno di un difensore affidabile.';

$replaced = $_POST['replaced_word'];

$replacing = $_POST['replacing_word'];

$newtext = str_replace($replaced, $replacing, $text);

var_dump($newtext);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sostituisci</title>
</head>
<body>
    
    <p>il testo originale é: <?php echo $text; ?> </p>
    <p>il testo è lungo: <?php echo strlen($text); ?> caratteri</p>
    <p>testo cambiato: <?php echo $newtext; ?></p>
    <p>ora il testo è lungo: <?php echo strlen($newtext); ?></p>
    
</body>
</html>