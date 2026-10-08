<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $filmak = require "filmak.php";

    foreach ($filmak as $value) {
            echo  $value["izena"] . " ".$value["isan"]. " ". $value["urtea"]. " ". $value["puntuazioa"]. "<br>" ;    
    
            }
    
    ?>
    <form action="index.php" method="POST">
        <input type="textbox" id="textbox">

    </form>
</body>
</html>