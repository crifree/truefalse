<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <?php

    $quiz = [
        "domanda1" => [
            "testo" => "La vita è bella",
            "risposta" => false,
            "messaggio_corretto" => "Sbagliato! La vita è bella.",
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

    echo "<h1>take the quiz</h1>";
    ?>

    <form action="quiz.php" method="GET">
        <?php foreach ($quiz as $domandaId => $domanda): ?>
            <label for=""><?php echo $domanda["testo"] ?></label>
            <br>
            <label for="">true</label>
            <input type="checkbox" id="<?php echo $domandaId ?>_checkbox1" name="<?php echo $domandaId ?>_result" value="true">
            <label for="">false</label>
            <input type="checkbox" id="<?php echo $domandaId ?>_checkbox2" name="<?php echo $domandaId ?>_result" value="false">
            <br>
        <?php endforeach; ?>
        <input type="submit" name="endQuiz" value="fineee">
    </form>

    <script>
        // Aggiungi un listener per gestire il cambio di stato dei checkbox
        <?php foreach ($quiz as $domandaId => $domanda): ?>
            document.getElementById('<?php echo $domandaId ?>_checkbox1').addEventListener('change', function () {
                if (this.checked) {
                    document.getElementById('<?php echo $domandaId ?>_checkbox2').checked = false;
                }
            });

            document.getElementById('<?php echo $domandaId ?>_checkbox2').addEventListener('change', function () {
                if (this.checked) {
                    document.getElementById('<?php echo $domandaId ?>_checkbox1').checked = false;
                }
            });
        <?php endforeach; ?>
    </script>
</body>
</html>
