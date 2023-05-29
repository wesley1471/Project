<?php
class homeController extends controller{

    public function index(){
        $showProduct = new showProductModel; 
        $products = $showProduct->getProduct();       
        $dados = array(
           'product' => $products);
        $this->loadTemplate('home', $dados);
    }
}