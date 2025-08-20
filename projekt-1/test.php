<?php
    $text = "Type shit dawg";
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
<?php
    echo "<p>Hej</p>";
    echo "<p>Hej igen<p>";
    echo "<p>YO<p>";
    echo "<p>" . $text . "</p>";
?>
<p>Vad heter du akhi?</p>
<form action="" method="get">
    <input type="text" name="secret" id="">
    <input type="submit" value="Tryck yäni">
</form>

<p>
    <?php
        if (isset($_GET["secret"])) {
            if ("secret" == "pizza") {
                echo "<p>Pizza är gott</p>";
            }
            
        }
    ?>
</p>
</body>
</html>