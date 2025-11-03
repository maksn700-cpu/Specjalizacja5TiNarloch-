<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title><?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2><?php echo APP_NAME; ?></h2>
    <form action="calc.php" method="post">
        <label for="kwota">Kwota kredytu (PLN):</label>
        <input type="number" id="kwota" name="kwota" step="0.01" required placeholder="np. 300000">

        <label for="oprocentowanie">Oprocentowanie roczne (%):</label>
        <input type="number" id="oprocentowanie" name="oprocentowanie" step="0.01" required placeholder="np. 7">

        <label for="lata">Okres spłaty (lata):</label>
        <input type="number" id="lata" name="lata" required placeholder="np. 30">

        <button type="submit">Oblicz ratę</button>
    </form>
</div>
</body>
</html>
