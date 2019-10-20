<?php


namespace App\Entity;


class Category
{
    private $name;
    private $goods;

    /**
     * Сategory constructor.
     * @param string $name
     * @param array $goods
     */
    public function __construct(string $name, array $goods)
    {
        $this->name = $name;
        $this->goods = $goods;
    }

}