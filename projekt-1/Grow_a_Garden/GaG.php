<?php
session_start();
if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: ' .$_SERVER['PHP_SELF']);
    exit;
}

if (!isset($_GET['money'])) {
    $_SESSION['money'] = 20;
}

if (!isset($_GET['seeds'])) {
    $_SESSION['seeds'] = array();
}

$seedPrices = array();
$seedPrices['Carrot'] = 10;

if (isset($_GET['buy'])) {
    $seedsToBuy = $_GET['buy'];
    array_push($_SESSION['seeds'], $seedsToBuy);
    $_SESSION['money'] -= $seedPrices[$seedsToBuy];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grow a Garden</title>
    <link rel="stylesheet" href="GaG.css">
</head>
<body>


<h1>Grow a Garden</h1>
<a href="?reset">Reset game om du vill yäni</a>
<h2>Wallet: <?= $_SESSION['money'] ?> $</h2>

<h2>Store</h2>
    <section>
        <?php foreach ($seedPrices as $key => $value) : ?>
            <div><a href="?buy=<?= $key ?>"></a></div>
        <?php endforeach; ?>
    </section>
<h2>Inventory</h2>

</body>
</html>