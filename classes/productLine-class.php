<?php 


    class productLine {
            private $line = array(
                "productLine " => "productLine",
                "textDescription" => "Short Description",
                "htmlDescription" => "Description",
                "image" => "Image"
        );
    
        public function index() {
            $databaseManager = new DatabaseManager();
            $productLines = $databaseManager->select('productlines');
            return $productLines;
            echo $productLines;
        } 
        public function line() {
            return $this->line;
        }
    }
    
    $productLinesObject = new productLine();
?>
