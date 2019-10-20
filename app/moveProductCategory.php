<?php
require_once __Dir__ . "/../vendor/autoload.php";

use App\Entity\Goods;

$dataBase = file_get_contents(__DIR__ . "/../data/database.json");

$data = json_decode($dataBase, true);

$data[goods][0][id] = "2";

$string = json_encode($data, JSON_PRETTY_PRINT );

file_put_contents( __DIR__ . "/../data/database.json", $string);
