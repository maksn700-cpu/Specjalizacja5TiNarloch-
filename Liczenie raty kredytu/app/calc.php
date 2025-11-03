<?php
require_once 'config.php';


$kwota = isset($_POST['kwota']) ? floatval($_POST['kwota']) : 0;
$oprocentowanie = isset($_POST['oprocentowanie']) ? floatval($_POST['oprocentowanie']) : 0;
$lata = isset($_POST['lata']) ? intval($_POST['lata']) : 0;


if ($kwota <= 0 || $oprocentowanie < 0 || $lata <= 0) {
    $error = "Wprowadź poprawne dane!";
    include 'calc_view.php';
    exit();
}


$miesiace = $lata * 12;
$i = ($oprocentowanie / 100) / 12;

if ($i == 0) {
    $rata = $kwota / $miesiace;
} else {
    $rata = $kwota * ($i * pow(1 + $i, $miesiace)) / (pow(1 + $i, $miesiace) - 1);
}


include 'calc_view.php';
?>
