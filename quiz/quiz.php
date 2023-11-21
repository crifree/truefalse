<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
 
<?php

if (isset($_GET["endQuiz"])) {
    $quiz = [
        "domanda1" => [
            "testo" => "La vita è bella",
            "risposta" => false,
            "messaggio_corretto" => "corretto! La vita è na merda.",
            "messaggio_errato" => "Corretto!"
        ],
        "domanda2" => [
            "testo" => "Costa picca e sapi bella",
            "risposta" => true,
            "messaggio_corretto" => "Corretto! Costa picca e sapi bella.",
            "messaggio_errato" => "Sbagliato!"
        ],
        "domanda3" => [
            "testo" => "100 cachi mille liri",
            "risposta" => true,
            "messaggio_corretto" => "Corretto! 100 cachi mille liri.",
            "messaggio_errato" => "Sbagliato!"
        ],
        // Aggiungi ulteriori domande qui...
    ];

    $punteggio = 0;
        ?>
        <div class="result">
            <h1>risultati</h1>
        
        <?php
        foreach($quiz as $domandaId => $domanda) {
            $answer = isset($_GET["{$domandaId}_result"]) ? ($_GET["{$domandaId}_result"] === "true") : null;
            if($answer !== null) {
                if( $answer === $domanda["risposta"]) {
                    $punteggio++;
                    echo '<p>' . $domanda["messaggio_corretto"] . "</p><br>";
                } else {
                    echo '<p>' . $domanda["messaggio_errato"] . "</p><br>";
                }
            } else {
                echo "<p> nessuna risposta per {$domanda["testo"]}</p><br>" ;
            }
        }

    echo "<p><br>Punteggio totale: $punteggio </p>";
} else {
    echo "<p>Il quiz non è stato completato.</p>";
}
?>
            <div class="rifai">
                <h3>rifai il quiz!</h3>
                <a href="index.php">quiiiiizz</a>
            </div>
        </div>
   
</body>
</html>