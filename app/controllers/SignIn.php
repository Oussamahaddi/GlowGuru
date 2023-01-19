

<?php

    class SignIn extends Controller {

        private $db;
        private $admModule;
        public function __construct() {
            $this->db = $this->model('Admin');
        }

        ////////////////////////////////////////////// login method \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
        public function login() {

            $this->admModule = $this->model('Admin');

            // check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process form
                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                // init data
                $data = [
                    'Email' => trim($_POST['Email']),
                    'Password' => trim($_POST['Password']),
                    'Email_err' => '',
                    'Password_err' => '',
                    'Email_Password_err' => ''
                ];

                // validate email
                if (empty($data['Email'])) {
                    $data['Email_err'] = 'Please enter email';
                }

                // validate password
                if (empty($data['Password'])) {
                    $data['Password_err'] = 'Please enter password';
                }

                // check if there is no erreur
                if (empty($data['Email_err']) && empty($data['Password_err'])) {
                    // check for validate email
                    $loginAdmCechk = $this->admModule->checkAdmin($data['Email'], $data['Password']);

                    if ($loginAdmCechk) {
                        // create session
                        $this->createSession($loginAdmCechk);
                    } else {
                        $data['Email_Password_err'] = 'Email or Password incorrect !!!';
                        $this->view('log/login', $data);
                    }
                } else {
                    // load view page with error
                    $this->view('log/login', $data);
                }


            } else {
                // init data
                $data = [
                    'Email' => '',
                    'Password' => '',
                    'Email_err' => '',
                    'Password_err' => '',
                    'Email_Password_err' => '',
                ];

                // load view
                $this->view('log/login', $data);
            }
        }


        public function createSession($unkown) {
            // create session of admin and client
            $_SESSION['Email'] = $unkown->email;

            redirect('Dashboards/statistique');
        }


        public function logOutAdmin() {
            unset($_SESSION['Email']);
            unset($_SESSION['id']);
            unset($_SESSION['name']);
            session_destroy();
            redirect('allPages/index');
        }

    }