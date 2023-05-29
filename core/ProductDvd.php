<?php

class ProductDvd extends Product{
    public $dvd;
    function __construct($id, $sku, $name, $price, $dvd){
        $this->dvd = $dvd;
        $this->price = $price;
        $this->name = $name;
        $this->sku = $sku;
        $this->id = $id;
    }


}