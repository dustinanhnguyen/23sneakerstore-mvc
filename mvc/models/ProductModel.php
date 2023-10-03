<?php
    class ProductModel extends Database {

        
        public function getAllProduct() {
            $sql = "select * from products order by created_at";
            return mysqli_query($this->connect, $sql);
        }

        public function getNewProduct() {
            $sql = "select * from products order by created_at desc limit 9";
            return mysqli_query($this->connect, $sql);
        }

        public function getProduct($productId) {
            if(isset($productId)) {
                $sql = "select * from products where id = ". $productId ;
                return mysqli_fetch_array(mysqli_query($this->connect, $sql));
            }
        }
    }
 

    // Nen return data duoi dang json de nhung ngon ngu khac co the sd 1 cach de dang