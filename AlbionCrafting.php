<?php
function vorwahl($input)
{
    return ($input * 12.5) * 0.97;
}

$erg = [
    vorwahl($_GET['t4']),
    vorwahl($_GET['t5']),
    vorwahl($_GET['t6']),
    vorwahl($_GET['t7']),
];

function t4($erg)
{
    $ausgabeFk = $erg[0] + 96;
    $ausgabeZh = $erg[0] + 24;
    $ausgabeNk = $erg[0] + 72;
    $ausgabeMa = $erg[0] + 72;
    $ausgabeRst = $erg[0] + 24;
    $ausgabe = [
        "Fernkampf" => $ausgabeFk,
        "Zweihand" => $ausgabeZh,
        "Nahkampf" => $ausgabeNk,
        "Magisch" => $ausgabeMa,
        "R&uumlstung" => $ausgabeRst,
    ];
    return $ausgabe;
}

function t5($erg)
{
    $ausgabeFk = $erg[1] + 192;
    $ausgabeZh = $erg[1] + 48;
    $ausgabeNk = $erg[1] + 192;
    $ausgabeMa = $erg[1] + 144;
    $ausgabeRst = $erg[1] + 48;
    $ausgabe = [
        "Fernkampf" => $ausgabeFk,
        "Zweihand" => $ausgabeZh,
        "Nahkampf" => $ausgabeNk,
        "Magisch" => $ausgabeMa,
        "R&uumlstung" => $ausgabeRst,
    ];
    return $ausgabe;
}

function t6($erg)
{
    $ausgabeFk = $erg[2] + 384;
    $ausgabeZh = $erg[2] + 96;
    $ausgabeNk = $erg[2] + 384;
    $ausgabeMa = $erg[2] + 288;
    $ausgabeRst = $erg[2] + 96;
    $ausgabe = [
        "Fernkampf" => $ausgabeFk,
        "Zweihand" => $ausgabeZh,
        "Nahkampf" => $ausgabeNk,
        "Magisch" => $ausgabeMa,
        "R&uumlstung" => $ausgabeRst,
    ];
    return $ausgabe;
}

function t7($erg)
{
    $ausgabeFk = $erg[3] + 768;
    $ausgabeZh = $erg[3] + 192;
    $ausgabeNk = $erg[3] + 768;
    $ausgabeMa = $erg[3] + 576;
    $ausgabeRst = $erg[3] + 192;
    $ausgabe = [
        "Fernkampf" => $ausgabeFk,
        "Zweihand" => $ausgabeZh,
        "Nahkampf" => $ausgabeNk,
        "Magisch" => $ausgabeMa,
        "R&uumltung" => $ausgabeRst,
    ];
    return $ausgabe;
}


$ausgaben = t4($erg);
echo "T4: ";
foreach ($ausgaben AS $key => $ausgabe) {

    echo $key . " " . $ausgabe . "&nbsp &nbsp &nbsp";
}
echo "<br>";
$ausgaben = t5($erg);
echo "T5: ";
foreach ($ausgaben AS $key => $ausgabe) {


    echo $key . " " . $ausgabe . "&nbsp &nbsp &nbsp";
}
echo "<br>";
$ausgaben = t6($erg);
echo "T6: ";
foreach ($ausgaben AS $key => $ausgabe) {


    echo $key . " " . $ausgabe . "&nbsp &nbsp &nbsp";

}
echo "<br>";
$ausgaben = t7($erg);
echo "T7: ";
foreach ($ausgaben AS $key => $ausgabe) {


    echo $key . " " . $ausgabe . "&nbsp &nbsp &nbsp";

}
var_dump($ausgaben);
?>
<br>
<a href="index.php">zur&uumlck</a>







