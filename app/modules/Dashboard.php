

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

        public function add($data) {
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

        public function edit($data) {
            $this->db->query("UPDATE `products` SET `product_name` = :name, `product_description` = :description, `product_price` = :price, `product_quantity` = :quantity, `product_image` = :image WHERE id = :id");
            $this->db->bind(':name', $data['product_name']);
            $this->db->bind(':description', $data['product_description']);
            $this->db->bind(':price', $data['product_price']);
            $this->db->bind(':quantity', $data['product_quantity']);
            $this->db->bind(':image', $data['product_image']);
            $this->db->bind(':id', $data['id']);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function delet($id) {
            $this->db->query("DELETE FROM `products` WHERE id = :id");
            $this->db->bind(':id', $id);
            if ($this->db->execute()) {
                return true;
            } else {
                return false;
            }
        }

        public function getProductById($id) {
            $this->db->query("SELECT * FROM products WHERE id = :id");
            $this->db->bind(':id', $id);
            $row = $this->db->single();
            return $row;
        }
    }