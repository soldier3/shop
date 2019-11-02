<?php


namespace App\Store\Model;


use App\Entity\Goods;
use \App\DataSource;

class CreateProduct
{
    function addProoduct() {
        $dataBase = new DataSource();
        $dataArray = $dataBase->getData();

        $product = new Goods();

        $productArray = $product->getProperty();
        $dataArray['goods'][] = $productArray;

        $dataBase->setData($dataArray);
        return $productArray;
    }
}