<?php

    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $piatto = isset($_POST["piatto"]) ? $_POST["piatto"] : "";
    $allergie = isset($_POST["allergie"]) ? $_POST["allergie"] : [];

        // Usare in_array($ago, $pagliaio)
        // --> ritorna true se l'ago è nel pagliaio
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
                        "allergeni" => ["uova", "glutine", "fruttasecca"]

                    ],
                    
                    [
                        "nome" => "Pizza Margherita",
                        "img" => "https://www.google.com/imgres?q=pizza%20margherita&imgurl=https%3A%2F%2Fcookingitalians.com%2Fwp-content%2Fuploads%2F2024%2F11%2FMargherita-Pizza.jpg&imgrefurl=https%3A%2F%2Fcookingitalians.com%2Fauthentic-margherita-pizza-recipe-italian-classic%2F&docid=DjP0xU2LEjWkSM&tbnid=T-qTfWLP7MhTkM&vet=12ahUKEwjL9_-ehJOQAxVOxQIHHWCIJGsQM3oECB0QAA..i&w=1344&h=768&hcb=2&ved=2ahUKEwjL9_-ehJOQAxVOxQIHHWCIJGsQM3oECB0QAA",
                        "allergeni" => ["uova", "glutine", "fruttasecca", "lattosio", ]

                    ],
                    
                    [
                        "nome" => "Insalata mista",
                        "img" => "https://www.google.com/imgres?q=insalata%20mista&imgurl=https%3A%2F%2Fwww.nadamasristorante.it%2Fpublic%2Fbox%2Fimmagini%2F294717%2Finsalata-mista.jpg&imgrefurl=https%3A%2F%2Fwww.nadamasristorante.it%2Fc%2Fcontorni%2Finsalata-mista-grande-25659.html&docid=YDT2cXLi0Yg0LM&tbnid=K2C8UhwPaeLj3M&vet=12ahUKEwjOjZDUhJOQAxWZxgIHHf2PCyAQM3oECBUQAA..i&w=800&h=500&hcb=2&ved=2ahUKEwjOjZDUhJOQAxWZxgIHHf2PCyAQM3oECBUQAA",
                        "allergeni" => [""]

                    ],
                    
                    [
                        "nome" => "Risotto ai funghi",
                        "img" => "https://www.google.com/imgres?q=risotto%20ai%20funghi&imgurl=http%3A%2F%2Fwww.speziata.it%2Fwp-content%2Fuploads%2F2017%2F09%2Frisotto-ai-funghi.jpg&imgrefurl=http%3A%2F%2Fwww.speziata.it%2Frecipe%2Frisotto-ai-funghi%2F&docid=oabCb8UOkV82mM&tbnid=ffcz7lFQ-g_kRM&vet=12ahUKEwjumIvohJOQAxXr0QIHHYzCNdMQM3oECCYQAA..i&w=1280&h=720&hcb=2&ved=2ahUKEwjumIvohJOQAxXr0QIHHYzCNdMQM3oECCYQAA",
                        "allergeni" => ["uova", "glutine", "fruttasecca", "lattosio"]

                    ],

                    
                ];

                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if ($nome) {
                            echo "<h2>Benvenuto, $nome!</h2>";
                        } else {
                            echo "<h2>Benvenuto, ospite misterioso!</h2>";
                        }
                
                
                    foreach ($ricette as $ricetta) {
                        $ago = false ;
                        foreach ($allergie as $allergia) {
                            if (in_array($allergia, $ricetta["allergeni"])) {
                                $ago = true;
                            }
                        }
                    }

                    if ($ago) {
                        echo "<p>Attenzione! Il piatto $piatto contiene allergeni che hai segnalato.</p>";
                    } else {
                        echo "<p>Il piatto $piatto è sicuro per te!</p>";
                    }







                }


            ?>
        </div>

    </form>
</body>
</html>