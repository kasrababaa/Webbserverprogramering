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

function h($text) {
    return htmlspecialchars($text);
}

$includeDir = __DIR__ . "/projekt-2-includes";
$title = "Anslagstavlan";