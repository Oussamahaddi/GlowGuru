

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
    }