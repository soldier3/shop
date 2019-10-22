<?php
require_once __Dir__ . "/../vendor/autoload.php";
use App\Entity\Goods;

$dataBase = file_get_contents(__DIR__ . "/../data/database.json");

$dataBaseArray = json_decode($dataBase, true);

$product = new Goods();

$productArray = $product->getProperty();

$dataBaseArray['goods'][] = $productArray;
$jsonDataBase = json_encode($dataBaseArray, JSON_PRETTY_PRINT );

file_put_contents( __DIR__ . "/../data/database.json", $jsonDataBase);

echo "add new product: \n";
foreach ($productArray as $key => $value){
    echo "$key: $value \n";
}