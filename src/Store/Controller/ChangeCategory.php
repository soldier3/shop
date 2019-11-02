<?php


namespace App\Store\Controller;


use App\Store\Model\moveProductCategory;

class ChangeCategory
{
    public function index()
    {
        $modelMoveProductCategory = new MoveProductCategory();
        $modelMoveProductCategory->changeCategory();

    }
}