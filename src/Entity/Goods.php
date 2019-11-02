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

    public function __construct( $name = "def" , $category = 1, $price = null, $quantity = null)
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
            $array[$key] = (string) $value;
        }

        return $array;
    }



}