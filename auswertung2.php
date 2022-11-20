<?php

$anrede = $_POST["anrede"];
$vorname = $_POST["vorname"];
$nachname = $_POST["nachname"];
$email = $_POST["email"];
$betreff = $_POST["betreff"];
$nachricht = $_POST["nachricht"];

if($anrede == "Herr"){
    $ansprache ="Sehr geehrter Herr";
   }
   else{
    $ansprache ="Sehr geehrte Frau";
   }
   echo "$ansprache $vorname $nachname<br>";
   echo"Sie haben sich unter der Email: $email erfolgreich registriert<br>";
   echo"Ihr Betreff: $betreff<br>";
   echo"Ihre Nachricht: $nachricht."
    

?>
