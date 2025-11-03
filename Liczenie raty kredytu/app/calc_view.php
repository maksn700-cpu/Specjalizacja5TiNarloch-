<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik – <?php echo APP_NAME; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Wynik obliczeń</h2>
    <?php if (isset($error)): ?>
        <p class="error"><?php echo htmlspecialchars($error); ?></p>
    <?php else: ?>
        <p>Kwota kredytu: <strong><?php echo number_format($kwota, 2, ',', ' '); ?> zł</strong></p>
        <p>Oprocentowanie: <strong><?php echo number_format($oprocentowanie, 2, ',', ' '); ?>%</strong></p>
        <p>Okres spłaty: <strong><?php echo $lata; ?> lat</strong></p>
        <hr>
        <p>Miesięczna rata: <strong><?php echo number_format($rata, 2, ',', ' '); ?> zł</strong></p>
    <?php endif; ?>

    <a href="index.php" class="btn">Powrót</a>
</div>
</body>
</html>
