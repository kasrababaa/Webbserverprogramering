<?php

    require_once("../../projekt-2-app.php");

    $stmt = $pdo->prepare("SELECT * FROM posts");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    require($includeDir . "/header.php"); 
    ?>

    <?php
    $debug = false;
    if ($debug) :
    ?>

    <pre>
        <?= h(print_r("")) ?>
    </pre>

    <?php endif; ?>

    
<main>
    <?php foreach ($result as $key => $value) : ?>
        <div class="post">
            <h2>
                <?= h($value['Title']) ?>
            </h2>
            <div>
                <?= h($value['Username'])  ?>
            </div>
            <div>
                <?= h($value['Content']) ?>
            </div>
        </div>
    <?php endforeach; ?>
</main>

<?php require($includeDir . "/footer.php"); ?>