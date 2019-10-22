<?php
require_once __Dir__ . "/../vendor/autoload.php";

use App\Entity\Goods;

$dataBase = file_get_contents(__DIR__ . "/../data/database.json");

$data = json_decode($dataBase, true);

$data['goods'][0]['category'] = "2";

$string = json_encode($data, JSON_PRETTY_PRINT );

file_put_contents( __DIR__ . "/../data/database.json", $string);

echo "Move product " . $data[goods][0][name] . " at category № 2: \n";

foreach ($data['goods'][0] as $key => $value){
    echo "$key: $value \n";
}

foreach ($data['category'] as $category){
    echo "Category $category[name] :\n";

    foreach ($data['goods'] as $product) {
        if ($product['category'] === $category['id']) {
            echo "      Product name: $product[name] \n";
        }
    }
}