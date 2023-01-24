
<?php

    class Admin {

        private $db;
        public function __construct() {
            $this->db = new Database();
        }

        public function checkAdmin($email, $password) {
            $this->db->query("SELECT * FROM admin WHERE email = :email");
            $this->db->bind(":email", $email);
            // $this->db->bind(":password", $password);

            $row = $this->db->single();

            // check row
            $hashed_password = $row->password;
            if(password_verify($password,$hashed_password)){
                return $row;
            } else {
                return false;
            }

        }

        public function getAllAdmin() {
            $this->db->query("SELECT * FROM admin");
            $count = $this->db->resultSet();
            return $count;
        }

    }