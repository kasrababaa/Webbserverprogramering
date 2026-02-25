<?php
require_once('../../projekt-4-app.php');

$userStmt = $pdo->prepare("SELECT * FROM Users");
$userStmt-> execute();
$userResults = $userStmt->fetchAll();

$view["users"] = $userResults;
$view["namn"] = "Kasra";

$twig->display('example.html.twig', $view);

