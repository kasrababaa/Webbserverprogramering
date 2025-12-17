<?php

// Database connection
$dsn = "sqlite:" . __DIR__ . "/projekt-3.db";

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Failed to connect to the database using DSN:<br>'$dsn'<br>" . $e->getMessage();
    exit();
}

function h($text) {
    return htmlspecialchars($text);
}

$includeDir = __DIR__ . "/projekt-3-includes";
$title = "Lindholmsskolan";

require_once(__DIR__ . "/projekt-3-config.php");