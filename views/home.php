<form action="" method="post">
<nav class="nav" >
    <h1>Product List</h1>
    <div>
        <button type="button" class="btn btn-light btn1" onclick="location.href = 'addProduct'">ADD</button>
        <button type="submit" class="btn btn-light btn1" id="delete-product-btn" >MASS DELETE</button>
    </div> 
</nav>



<table class="conteiner">

            <?php 
            

            foreach($product as $obj){
                echo '<td class="tdtable">
                        <input type="checkbox" name="delete-checkbox[]" value ="'.$obj->id.'"class="delete-checkbox"> 
                        <span class="h1td">'.$obj->sku.'</span>
                        <span class="h1td">'.$obj->name.'</span>
                        <span class="h1td">'.$obj->price.' $</span>';
                        if($obj instanceof ProductDvd){
                            echo '<span class="h1td">Size: '.$obj->dvd.' MB</span> </td>';
                        }elseif($obj instanceof ProductBook){
                            echo '<span class="h1td">Weight: '.$obj->weight.'KG</span> </td>';
                        }elseif($obj instanceof ProductForniture){
                            echo '<span class="h1td">Dimension: '.$obj->height.'x'.$obj->width.'x'.$obj->lenght.'</span> </td>';
                        }
                        
            }
            $sql = new deleteProduct;
            $sql->deleteSelected();
            ?>


            
</table>    
</form>