<?php

class ProductBook extends Product{
    public $weight;
    public function __construct($id, $sku, $name, $price, $weight){
        $this->weight = $weight;
        $this->price = $price;
        $this->name = $name;
        $this->sku = $sku;
        $this->id = $id;
    }
}