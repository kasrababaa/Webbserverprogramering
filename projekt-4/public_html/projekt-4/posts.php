<?php
require_once('../../projekt-4-app.php');

$postsStmt = $pdo->prepare("SELECT * FROM Posts");
$postsStmt-> execute();
$postsResults = $userStmt->fetchAll();

$view["users"] = $userResults;
$view["namn"] = "Kasra";



$twig->display('posts.html.twig', $view);