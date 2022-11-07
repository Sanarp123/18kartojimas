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
        <label for="productLine ">Product Line</label>
        <input type="text" name="productLine " class="form-control" id="productLine " placeholder="productLine ">
    </div>
    <div class="form-group">
        <label for="productScale">Product line</label>
        <input type="text" name="productScale" class="form-control" id="productScale" placeholder="productScale">
    </div>
    <div class="form-group">
        <label for="productVendor">Product Vendor</label>
        <input type="text" name="productVendor" class="form-control" id="productVendor" placeholder="productVendor">
    </div>







    <div class="form-group">
        <label for="productLine">Product Line</label>
        <!-- <input type="text" name="job_id" class="form-control" id="job_id" placeholder="Job ID"> -->

        <select name="productLine" class="form-select">
                <!-- masyva kuri gavome is duomenu bazes  -->
                <?php foreach($jobs as $job) { ?>
                        <option value="<?php echo $job["job_id"] ?>"><?php echo $job["job_title"] ?></option>
                <?php } ?>    
        </select>
    </div>
    <div class="form-group">
        <label for="salary">Salary</label>
        <input type="text" name="salary" class="form-control" id="salary" placeholder="Salary">
    </div>
    <div class="form-group">
        <label for="manager_id">Manager ID</label>
        <input type="text" name="manager_id" class="form-control" id="manager_id" placeholder="Manager ID">
    </div>
    <div class="form-group">
        <label for="department_id">Department ID</label>
        <!-- <input type="text" name="department_id" class="form-control" id="department_id" placeholder="Department ID"> -->
        <select name="department_id" class="form-select">
                <!-- masyva kuri gavome is duomenu bazes  -->
                <?php foreach($departments as $department) { ?>
                        <option value="<?php echo $department["department_id"] ?>"><?php echo $department["department_name"] ?></option>
                <?php } ?>
        </select>
    </div>        
        
    <button type="submit" name="create" class="btn btn-primary">Create</button>
</form>