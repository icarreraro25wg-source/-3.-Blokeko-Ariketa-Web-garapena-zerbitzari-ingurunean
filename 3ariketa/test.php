<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once 'Korrikalaria.php';
require_once 'Txapelketa.php';

$txapelketa = new Txapelketa();

$k1 = new korrikalari("Jone", "A1");
$k2 = new korrikalari("Mikel", "B2");
$k3 = new korrikalari("Amaie", "C3");
$k4 = new korrikalari("Ibai", "D4");

$txapelketa->korrikalariaGehitu($k1);
$txapelketa->korrikalariaGehitu($k2);
$txapelketa->korrikalariaGehitu($k3);
$txapelketa->korrikalariaGehitu($k4);

try {
    $txapelketa->gehituLasterketaKorrikalariari("A1", 12);
    $txapelketa->gehituLasterketaKorrikalariari("A1", 18);
    $txapelketa->gehituLasterketaKorrikalariari("B2", 20);
    $txapelketa->gehituLasterketaKorrikalariari("B2", 16);
    $txapelketa->gehituLasterketaKorrikalariari("C3", 9);
    $txapelketa->gehituLasterketaKorrikalariari("D4", 25);
    $txapelketa->gehituLasterketaKorrikalariari("D4", 22);


} catch (Exception $e) {
    echo "Errorea: " . $e->getMessage() . "<br>";
}

echo "Batez besteko denbora 1. lasterketan: " . $txapelketa->batasBestekoa() . "<br>";
echo "Korrikalari bizkorrena: " . $txapelketa->bizkorrena()->getIzena() . "<br>";

echo "15 segundu baino gehiago (2 lasterketetan): <br>";
print_r($txapelketa->korrikalariobeak());

echo "'e' letraz amaitzen direnak: <br>";
print_r($txapelketa->eLetraHasita());
?>
</body>
</html>