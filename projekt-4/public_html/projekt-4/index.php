<?php
require_once('../../projekt-4-app.php');

$twig->display('example.html.twig', [
    "namn" => "Kasra",
    "exempelLista" => ["sak 1", "sak 2", "sak 3"]
]);