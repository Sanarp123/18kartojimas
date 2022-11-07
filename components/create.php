<form method="post" action="index.php">
    <!-- <input type="hidden" name="page" value="<?php //echo $_GET['page']; ?>"> -->

    <div class="form-group">
        <label for="productCode">Product code</label>
        <input type="text" name="productCode" class="productCode" id="productCode" placeholder="productCode">
    </div>
    <div class="form-group">
        <label for="productName">Product Name</label>
        <input type="text" name="productName" class="productName" id="productName" placeholder="productName">
    </div>
    <div class="form-group">
        <label for="productLine">Product Line</label>
            <select name="productLine" class="form-select">
                <!-- masyva kuri gavome is duomenu bazes  -->
                <?php echo $productLines;
                
           //     foreach($productLines as $productLine) { 
            ?>
           //             <option value="<?php  ?>"></option>
                <?php  ?>    
        </select>
    </div>
    <div class="form-group">
        <label for="productScale">Product Scale</label>
        <input type="text" name="productScale" class="form-control" id="productScale" placeholder="productScale">
    </div>
    <div class="form-group">
        <label for="productVendor">Product Vendor</label>
        <input type="text" name="productVendor" class="form-control" id="productVendor" placeholder="productVendor">
    </div>
    <div class="form-group">
        <label for="productDescription">Product Description</label>
        <input type="text" name="productDescription" class="form-control" id="productDescription" placeholder="productDescription">
    </div>
    <div class="form-group">
        <label for="quantityInStock">Stock</label>
        <input type="Number" name="quantityInStock" class="form-control" id="quantityInStock" placeholder="quantityInStock">
    </div>

    <div class="form-group">
        <label for="buyPrice">Cost</label>
        <input type="Number" name="buyPrice" class="form-control" id="buyPrice" placeholder="buyPrice">
    </div>
    <div class="form-group">
        <label for="MSRP">End user price</label>
        <input type="Number" name="MSRP" class="form-control" id="MSRP" placeholder="MSRP">
        <br>
    </div>
    
    <button type="submit" name="create" class="btn btn-primary">Create</button>
</form>