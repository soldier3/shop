<?php

namespace App\Entity;
use IteratorAggregate;

class Goods
{

    private $id;
    private $name;
    private $category;
    private $price;
    private $quantity;

    /**
     * Goods constructor.
     * @param string $name
     * @param int $category
     * @param int $price
     * @param int $quantity
     */
    public function __construct( string $name = "def" ,int $category = 1, int $price = 0, int $quantity = 0)
    {
        $this->id = rand(11, 100);
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getProperty() {
        $array = [];

        foreach ($this as $key => $value ) {
            $array[$key][] = $value;
        }

        return $array;
    }



}