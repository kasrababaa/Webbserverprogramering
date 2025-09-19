<?php
session_start();
if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: ' .$_SERVER['PHP_SELF']);
    exit;
}

if (!isset($_SESSION['money'])) {
    $_SESSION['money'] = 100;
}

if (!isset($_SESSION['seeds'])) {
    $_SESSION['seeds'] = array();
}

if (!isset($_SESSION['plots'])) {
    $_SESSION['plots'] = array();
}

$seedPrices = array();
$seedPrices['Cucumber'] = 5;
$seedPrices['Carrot'] = 10;
$seedPrices['Tomato'] = 15;



 


if (isset($_GET['buy'])) {
    $seedsToBuy = $_GET['buy'];
    array_push($_SESSION['seeds'], $seedsToBuy);
    $_SESSION['money'] -= $seedPrices[$seedsToBuy];
}

if (isset($_GET['plant'])) {
    $seedToPlant = $_GET['plant'];
    $seedName = $_SESSION['seeds'][$seedToPlant];
    unset($_SESSION['seeds'][$seedToPlant]);
    array_push($_SESSION['plots'], $seedName);

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

<div class="rubrik">
    <h1>Grow a Garden</h1>
</div>

<a href="?reset">Reset game om du vill yäni</a>

<?php if ($_SESSION['money'] >= 0) : ?>
        <h2>Wallet: <?= $_SESSION['money'] ?> $</h2>        
<?php else : ?>
<script>
    alert("Du har ingen para akhi");
</script>

<?php endif; ?>


<div class="typallt">
    <h2>Store</h2>
    <section class="inv">
        <?php foreach ($seedPrices as $key => $value) : ?>
            <div class="inventory">
                <a href="?buy=<?= $key ?>"><?= $key ?></a> - <?= $value ?>$
            </div>
            
        <?php endforeach; ?>
    </section>
<h2>Inventory</h2>
    <section>
        <div class="inv">
            <?php foreach ($_SESSION['seeds'] as $key => $value) : ?>
            <div class = "inventory">
                <?= htmlentities($value) ?> - <a href="?plant=<?= $key ?>">Plant</a>
                <div class="invimg"><img src="images/<?=$value?>.png" alt=""></div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
</div>
</body>
</html>