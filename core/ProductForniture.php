<?php

class ProductForniture extends Product{
    public $height;
    public $width;
    public $lenght;
    
    public function __construct($id, $sku, $name, $price, $height, $width, $lenght){
        $this->height = $height;
        $this->width = $width;
        $this->lenght = $lenght;
        $this->price = $price;
        $this->name = $name;
        $this->sku = $sku;
        $this->id = $id;
    }

}