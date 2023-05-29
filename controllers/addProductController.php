<?php
class addProductController extends controller{
    public function index(){
        $id = rand(2,999999999);
        if(isset($_POST['dvd']) && $_POST['dvd'] != ''){
            $sql = new addProductModel;
            $dvd = new ProductDvd($id, $_POST['sku'], $_POST['name'], floatval($_POST['price']), intval($_POST['dvd']));
            $sql->addProduct($dvd);
        }else if(isset($_POST['weight']) && $_POST['weight'] != ''){
            $sql = new addProductModel;
            $book = new ProductBook($id, $_POST['sku'],$_POST['name'],$_POST['price'],$_POST['weight']);
            $sql->addProduct($book);
        }else if(isset($_POST['height']) && $_POST['height'] != ''){
            $sql = new addProductModel;
            $forniture = new ProductForniture($id, $_POST['sku'],$_POST['name'],floatval($_POST['price']),intval($_POST['height']),intval($_POST['width']),intval($_POST['lenght']));
            $sql->addProduct($forniture);
        }
        $dados = array();
        $this->loadTemplate('addProduct', $dados);
    }
}
