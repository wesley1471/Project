<?php

class showProductModel extends model{

    public function getProduct(){
        
        
    $sql = "SELECT id, sku, _name, price, size, `weight`, `height`, `width`, `lenght` FROM produto;";
    $this->db->prepare($sql);
    $sql = $this->db->query($sql);
    $products = array();
    if($sql->rowCount() > 0){
        $result = $sql->fetchAll();
        foreach($result as $rs){
            if($rs[4] != null || $rs[4] != ''){
            array_push($products,new ProductDvd($rs[0],$rs[1],$rs[2],$rs[3],$rs[4]));      
            }else if($rs[5] != null || $rs[5] != ''){
                array_push($products,new ProductBook($rs[0],$rs[1],$rs[2],$rs[3],$rs[5]));      
            }
            else if($rs[6] != null || $rs[6] != ''){
                array_push($products,new ProductForniture($rs[0],$rs[1],$rs[2],$rs[3],$rs[6],$rs[7],$rs[8]));
            }
        }     
    }
    return $products;
}       
}