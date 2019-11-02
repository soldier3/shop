<?php


namespace App\Store\Model;


use App\DataSource;

class moveProductCategory
{
    function changeCategory() {
        $dataBase = new DataSource();
        $dataArray = $dataBase->getData();

        $dataArray['goods'][0]['category'] = "2";

        $dataBase->setData($dataArray);
    }
}