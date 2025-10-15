<?php
    



    require_once("../../projekt-2-app.php");
    $stmt = $pdo->prepare("SELECT * FROM posts");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anslagstavlan</title>
</head>
<body>

    <?php
    $debug = false;
    if ($debug) :
    ?>

    <pre>
        <?= h(print_r("")) ?>
    </pre>

    <?php endif; ?>

    <h1>Anslagstavlan</h1>
<main>
    <?php foreach ($result as $key => $value) : ?>
        <div class="post">
            <h2>
                <?= h($value['Title']) ?>
            </h2>
            <div>
                <?= h($value['Username']) ?>
            </div>
            <div>
                <?= h($value['Content']) ?>
            </div>
        </div>
    <?php endforeach; ?>
</main>
</body>
</html>