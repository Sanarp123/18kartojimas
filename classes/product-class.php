<?php 

include "utilities/DatabaseManager.php";


class Product {



    private $cols = array(
        "productCode" => "ID",
        "productName" => "Product Name",
        "productLine" => "Product Line",
        "productScale" => "Scale",
        "productVendor" => "Vendor",
        "productDescription	" => "Description",
        "quantityInStock" => "Stock",
        "buyPrice" => "Cost",
        "MSRP" => "End User Price"
    );

    //uz duomenu gavima
    public function index() {
        //1. select uzklausa i duomenu baze
        //2. grazina rezultata
        //3. atvaizduojamas pages/employees.php

        //prie duombazes atsidaro
        $databaseManager = new DatabaseManager();
        $products = $databaseManager->select('products');


        // $jobs = new Job;
        // $jobs = $jobs->index();
        
        return $products;
    }

    public function cols() {
        return $this->cols;
    }


    //uz duomenu sukurima
    public function createProduct() {
        //visus kintamuosius kuriuos paduoda POST metodas
        if(isset($_POST["create"])) {
            $data = $_POST;
            unset($data["create"]);
            unset($data["page"]);

            $cols = array_keys($data);
            $values = array_values($data);

            $databaseManager = new DatabaseManager();
            $databaseManager->insert('products', $cols, $values);

            header("Location: index.php?page=products");
            exit();
        }
        
    }

    //uz duomenu redagavima
    public function updateProduct() {

    }

    //uz duomenu istrynima
    public function deleteProduct() {
        if(isset($_POST["page"]) && $_POST["page"] == "products") {
            if(isset($_POST["delete"])) {
                $databaseManager = new DatabaseManager();
                $databaseManager->delete('products', 'productCode', $_POST["delete"]);//mygtuko reiksme
                header("Location: index.php?page=products");
                exit();
            }
        }
    }

}

$productsObject = new Product();