
<?php include "classes/product-class.php" ?>
<?php include "classes/productLine-class.php" ?>

<?php 
    $products = $productsObject->index(); 
    $cols =  $productsObject->cols();    
    $productsObject->deleteProduct();
    $productsObject->createProduct();
  //  $productLines = $productLinesObject->index(); //visa darbu masyva
 //   $departments = $departmentsObject->index();

?>  


<div class="row">
        <div class="col-lg-8">
            <h1>Products</h1>
        </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <?php include "components/create.php"; ?>
    </div>
</div>


<div class="row">
    <div class="col-lg-8">
        <table class="table table-striped">
            <tr>
                <?php foreach($cols as $col) { ?>
                    <th><?php echo $col; ?></th>
                <?php } ?>
                <th>Actions</th>    
            </tr>
                <?php foreach($products as $product) { ?>
                    <tr>
                        <?php foreach($cols as $key=>$col) { ?>
                            <td><?php echo $product[$key]; ?></td>
                        <?php } ?>
                        <td>
                            <form method="post" action="index.php">
                                <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>">
                                <button type="submit" name="delete" class="btn btn-danger" value="<?php echo $product["productCode"]; ?>">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                   
        </table>
    </div>
</div>