<?php
session_start();
if (isset($_GET['reset'])) {
    session_destroy();
    header('Location: ' .$_SERVER['PHP_SELF']);
    exit;
}
$_SESSION['money'] = 10;

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
<pre>
    <?= print_r[$_SESSION] ?>
</pre>

<h1>Grow a Garden</h1>
<a href="?reset">Reset game om du vill yäni</a>
<h2>Wallet: </h2>

<h2>Store</h2>

<h2>Inventory</h2>

</body>
</html>