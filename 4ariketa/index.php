<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "Pelikula.php";
    $filmak = require "filmak.php";
    
    function gorde($filmak) {
    file_put_contents("filmak.php", "<?php\nreturn " . var_export($filmak, true) . ";");
}

    foreach ($filmak as $value) {
            echo  $value["izena"] . " ".$value["isan"]. " ". $value["urtea"]. " ". $value["puntuazioa"]. "<br>" ;    
            }
    $izena = isset($_POST["izena"]) ? $_POST["izena"] : "";
    $isan = isset($_POST["isan"]) ? $_POST["isan"] : "";
    $urtea = isset($_POST["urtea"]) ? $_POST["urtea"] : "";
    $puntuazioa = isset($_POST["puntuazioa"]) ? $_POST["puntuazioa"] : "";

    $pos = -1;
    foreach ($filmak as $key => $film) {
        if ($film["isan"] == $isan){
            $pos = $key;
        }
    }
    if($_POST){
        if($izena == "" || $isan == ""){
            echo "ez dago izena edo isan";
        }
        if ( $izena != "" && $isan != "" && $pos = -1){
            
        }
    }
    ?>
    <form action="index.php" method="POST">
        <br>izena: <input type="text" name="izena" value="<?php echo htmlspecialchars($izena); ?>">
        <br>ISAN: <input type="text" name="isan" value="<?php echo htmlspecialchars($isan); ?>">
       <br> urtea: <input type="text" name="urtea" value="<?php echo htmlspecialchars($urtea); ?>">
        <br> puntuazioa:
        <select>
            <?php
            for ($i=0; $i < 5; $i++) { 
                $aukera = ($puntuazioa !== "" && $puntuazioa == $i) ? "selected" : "";
                echo "<option value'$i' $aukera>$i</option>";
            }
            ?>
        </select>
        <br>
         <input type="submit" value="bidali">
    </form>
</body>
</html>