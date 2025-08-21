<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>
<body>



<div class="allt">
    <h1>Skriv nåt bror</h1>
<form action="" method="get">
    <input type="text" name="secret" id="">
    <input type="submit" value="Tryck yäni">
</form>

    <?php
        if (isset($_GET["secret"])) {
            $input = $_GET["secret"];

            if ($input == "pizza") {
                echo "<p>Pizza är gott</p>";
            }
            elseif ($input == "LTG") {
                echo '<img src="LTG.png" alt="skolan">';
            }
        }
    ?>
</div>
</body>
</html>