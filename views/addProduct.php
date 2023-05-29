<form name="add-form" method="post" id="product_form">
<nav class="nav" >
    <h1>Product Add</h1>
    <div>
        <input type="submit" class="btn btn-light btn1" value="Save" >
        <a href="<?php echo BASE_URL ?>" type="button" class="btn btn-light btn1" >Cancel</a>
    </div> 
</nav>
    <div class="conteiner-add">
        <div>
            <label for="sku">SKU</label>
            <input type="text" name="sku" id="sku" placeholder = "#sku">
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder = "#name">
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder = "#price">
        </div>
        <label for="productType">Type Switcher</label>
        <select  name="productType" id="productType">
            <option id="dvd" value="dvd">DVD</option>
            <option id="forniture" value="forniture">Furniture</option>
            <option id="book" value="book">Book</option>
        </select>
        <div class="dvd">
            <label for="dvd">Size (MB)</label>
            <input type="text" name="dvd" id="size">

        </div>
        <div class="book1">
            <label for="weight">Weight (KG)</label>
            <input type="text" name="weight" id="weight">
        </div>
        <div class="forniture1">
            <div>
                <label for="height">Height(CM)</label>
                <input type="text" name="height" id="height">
            </div>
            <div>
                <label for="width">Width(CM)</label>
                <input type="text" name="width" id="width">
            </div>
            <div>
                <label for="lenght">Lenght(CM)</label>
                <input type="text" name="lenght" id="length">
            </div>
        </div>
        
    </div>
</form>