<?php

class addProductModel extends model{

    public function addProduct($item){
            
            if($item instanceof ProductBook){
                $sql = "INSERT INTO produto (`id`, `_name`, `sku`, `price`, `weight`) VALUES ('$item->id','$item->name','$item->sku','$item->price','$item->weight');";
                $sql1 = $this->db->prepare($sql);
                $sql1->execute();
            }elseif($item instanceof ProductDvd){
                $sql = "INSERT INTO produto (`id`, `_name`, `sku`, `price`, `size`) VALUES ('$item->id','$item->name','$item->sku','$item->price','$item->dvd');";
                $sql1 = $this->db->prepare($sql);
                $sql1->execute();
            }elseif($item instanceof ProductForniture){
                $sql = "INSERT INTO produto (`id`, `_name`, `sku`, `price`, `height`, `width`, `lenght`) VALUES ('$item->id','$item->name','$item->sku','$item->price','$item->height','$item->width','$item->lenght');";
                $sql1 = $this->db->prepare($sql);
                $sql1->execute();
            }
            
            
            
            
            

    }

}