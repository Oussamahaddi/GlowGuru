

<?php

    class Dashboard {
        private $db;
        public function __construct() {
            $this->db = new Database;
        }
        public function getStateProduct() {
            $this->db->query("SELECT * FROM products");

            $this->db->execute();

            return $this->db->rowCount();
        }

        public function getAllProduct() {
            $this->db->query("SELECT * FROM products");

            $row = $this->db->resultSet();

            if ($this->db->rowCount() > 0) {
                return $row;
            } else {
                return false;
            }
        }

        public function addProduct($data) {
            $this->db->query("INSERT INTO `products`(`product_name`, `product_description`, `product_price`, `product_quantity`, `product_image`) 
                                    VALUES (:product_name, :product_description, :product_price,:product_quantity,:product_image)");
            $this->db->bind(':product_name', $data['product_name']);
            $this->db->bind(':product_description', $data['product_description']);
            $this->db->bind(':product_price', $data['product_price']);
            $this->db->bind(':product_quantity', $data['product_quantity']);
            $this->db->bind(':product_image', $data['product_image']);

            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }

        }
    }