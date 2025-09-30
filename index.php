<?php

    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $piatto = isset($_POST["piatto"]) ? $_POST["piatto"] : "";
    $allergie = isset($_POST["allergie"]) ? $_POST["allergie"] : [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo "<h2>Benvenuto, $nome!</h2>";
        echo "<p>Hai scelto di assaggiare: <strong>$piatto</strong></p>";
        
        
        if (!empty($allergie)) {
            foreach($allergie as $allergia) {
                echo "<p>Sei allergico a: <strong>$allergia</strong></p>";
            }
        } else {
            echo "<p>Non hai segnalato allergie.</p>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nome"><h4>Nome : </label>
        <input value="<?php echo $nome?>" type="text" name="nome">
        <br>
        <label for="piatto">Piatto preferito : </label>
        <input value="<?php echo $piatto?>" type="text" name="piatto">
        <br>
        <h3>Allergie alimentari:</h3>
    
        <input value="glutine" type="checkbox" name="allergie[]">
        <label for="allergie">Glutine  |</label>

        <input value="Lattosio" type="checkbox" name="allergie[]">
        <label for="allergie">Lattosio  |</label>

        <input value="frutta Secca" type="checkbox" name="allergie[]">
        <label for="allergie">Frutta Secca  |</label>

        <input value="crostacei" type="checkbox" name="allergie[]">
        <label for="allergie">Crostacei</label>
        <br><br>

        <input type="submit" value="Invia">

    </form>
</body>
</html>