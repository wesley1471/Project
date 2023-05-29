<?php
class deleteProduct extends model{
    public function deleteSelected(){
        if(isset($_POST['delete-checkbox'])){
            foreach($_POST['delete-checkbox'] as $obj){
                $sql = 'DELETE FROM `produto` WHERE `id`="'.$obj.'"';
                $sql1 = $this->db->prepare($sql);
                $sql1->execute();
                header("Refresh:0");
            }
        }
    }

}