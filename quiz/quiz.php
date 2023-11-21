<?php


if(isset($_GET["endQuiz"])) {
      if(isset($_GET["resultV"]) || isset($_GET["resultF"])) {
            
            $result = isset($_GET["resultV"]) ? isset($_GET["resultF"]) : null;
            if($result === false) {
                  return false;
            } else {
                  return true;
            }
      } else {
            echo "nessuna risposta data";
      }
}



