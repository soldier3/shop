<?php


namespace App\Store\Controller;

use \App\Store\Model\CreateProduct;



class AddProduct
{

    public function index()
    {
        $product = new CreateProduct();
        $product->addProoduct();
    }
}