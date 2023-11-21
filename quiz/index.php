<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
      <a href="test.php">test</a>
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
      ];

      echo "<h1>take the quiz</h1>";
      ?>

      <form action="quiz.php" method="GET">
          <label for=""><?php echo $quiz["domanda1"]["testo"] ?></label>
          <br>
          <label for="">true</label>
          <input type="checkbox" id="checkbox1" name="resultV" value="true">
          <label for="">false</label>
          <input type="checkbox" id="checkbox2" name="resultF" value="false">
          <br>
          <input type="submit" name="endQuiz" value="fineee">
      </form>

      <script>
            // Aggiungi un listener per gestire il cambio di stato dei checkbox
            document.getElementById('checkbox1').addEventListener('change', function () {
                  if (this.checked) {
                  // Se checkbox1 è selezionato, deseleziona checkbox2
                  document.getElementById('checkbox2').checked = false;
                  }
            });

        document.getElementById('checkbox2').addEventListener('change', function () {
            if (this.checked) {
                // Se checkbox2 è selezionato, deseleziona checkbox1
                document.getElementById('checkbox1').checked = false;
            }
        });
    </script>
</body>
</html>
