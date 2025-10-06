<?php

    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $piatto = isset($_POST["piatto"]) ? $_POST["piatto"] : "";
    $allergie = isset($_POST["allergie"]) ? $_POST["allergie"] : [];

        // Usare in_array($ago, $pagliaio)
        // --> ritorna true se l'aglo è nel pagliaio
        // --> ritorna false se l'ago NON è nel pagliaio
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
        <select id="piatto" name="piatto" required>
            <option value="Pankake">Pankake</option>
            <option value="Pasta al pesto">Pasta al pesto</option>
            <option value="Pizza Margherita">Pizza Margherita</option>
            <option value="Insalata mista">Insalata mista</option>
            <option value="Risotto ai funghi">Risotto ai funghi</option>
        </select>
        <br><br>

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

        <div>
            <?php

                $ricette = [
                    [
                        "nome" => "Pankake",
                        "img" => "https://www.google.com/imgres?q=pancakes&imgurl=https%3A%2F%2Fblog.giallozafferano.it%2Frossellainpadella%2Fwp-content%2Fuploads%2F2019%2F08%2FPancake-alla-nutellab.jpg&imgrefurl=https%3A%2F%2Fblog.giallozafferano.it%2Frossellainpadella%2Fricetta-pancakes-alla-nutella-5-minuti%2F&docid=rWMmc1KrlwJPuM&tbnid=7YrQH9zgJOnEnM&vet=12ahUKEwjnqurIgI-QAxXS1AIHHeSaEMcQM3oECCQQAA..i&w=3708&h=2331&hcb=2&ved=2ahUKEwjnqurIgI-QAxXS1AIHHeSaEMcQM3oECCQQAA",
                        "allergeni" => ["uova", "glutine", "lattosio"]
                    ],

                    [
                        "nome" => "Pasta al pesto",
                        "img" => "https://www.google.com/imgres?q=pasta%20al%20pesto&imgurl=https%3A%2F%2Fcookingwithelo.com%2Fwp-content%2Fuploads%2F2022%2F06%2FPasta-al-pesto.jpg&imgrefurl=https%3A%2F%2Fcookingwithelo.com%2Fpasta-al-pesto%2F&docid=fBjqS1DqwAkHsM&tbnid=AOFX3wjLe4clcM&vet=12ahUKEwi3hpLmgY-QAxW_8gIHHbQyGmMQM3oECCoQAA..i&w=1200&h=1200&hcb=2&ved=2ahUKEwi3hpLmgY-QAxW_8gIHHbQyGmMQM3oECCoQAA",
                        "allergeni" =>["uova", "glutine", "fruttasecca"]

                    ],

                    [

                    ]
                ];


                $ago = false ;

                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if ($nome) {
                            echo "<h2>Benvenuto, $nome!</h2>";
                        } else {
                            echo "<h2>Benvenuto, ospite misterioso!</h2>";
                        }
                
                
                    if (!empty($allergie)) {
                        foreach($allergie as $allergia) {
                            echo "<p>Sei allergico a: <strong>$allergia</strong></p>";
                            if(in_array($allerigia, $ricetta["allergeni"]) !== false){
                                $ago = true;
                            }
                        }
                    } else {
                        echo "<p>Non hai segnalato allergie.</p>";
                    }

                    if ($ago){
                        echo "<p>Attenzione! Il piatto <strong>$piatto</strong> potrebbe contenere allergeni per te.</p>";
                    } else {
                        echo "<p>Il piatto <strong>$piatto</strong> è sicuro per te.</p>";
                    }
                    
                }

            ?>

        </div>

    </form>
</body>
</html>