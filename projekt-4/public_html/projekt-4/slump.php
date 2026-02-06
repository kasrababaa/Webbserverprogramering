<?php
require_once('../../projekt-4-app.php');

$slump1 = rand(10, 20);

$kasrasLista = [];



$twig->display('slump.html.twig', [
    "slump1" => rand(5, 10),
    "slump2" => [1 , 2 , 3 , 4]
]);