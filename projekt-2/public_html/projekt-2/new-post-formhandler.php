<?php
require_once("../../projekt-2-app.php");
$stmt = $pdo->prepare("INSERT INTO posts(title, content, username)");

print_r($_POST);

if (strlen($_POST['title'] > 10) || strlen($content) > 50) {
    echo'För stor bror';        
}