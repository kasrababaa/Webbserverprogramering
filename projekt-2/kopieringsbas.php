<?php

// TILL projekt-2-app.php

// Database connection
$dsn = "sqlite:" . __DIR__ . "/projekt2.db";

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>'$dsn'<br>" . $e->getMessage();
    die();
}


// Till index.php

$result = $pdo->query("SELECT * FROM posts");
foreach ($result as $key => $value) {
    print_r($value);
}