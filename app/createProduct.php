<?php
require_once __Dir__ . "/../vendor/autoload.php";
use App\Entity\Goods;

$dataBase = file_get_contents(__DIR__ . "/../data/database.json");

$dataBaseArray = json_decode($dataBase, true);

$product = new Goods();

$productArray = $product->getProperty();



$dataBaseArray[goods][] = $productArray;
$jsonDataBase = json_encode($json, JSON_PRETTY_PRINT );

file_put_contents( __DIR__ . "/../data/database.json", $jsonDataBase);
