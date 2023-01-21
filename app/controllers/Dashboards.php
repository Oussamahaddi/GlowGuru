

<?php

    class Dashboards extends Controller {
        private $productModel;
        public function __construct() {
            $this->productModel = $this->model('Dashboard');
        }

        public function Statistique() {
            $products = $this->productModel->getStateProduct();
            $data = [
                'products_stats' => $products
            ];
            $this->view('Dash/Statistique', $data);
        }

        public function product() {
            $allProduct = $this->productModel->getAllProduct();
            $data = [
                'products' => $allProduct
            ];
            $this->view('Dash/Product', $data);
        }

        public function addProduct() {
            // check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process form
                $imgName = $_FILES['image']['name'];
                $imgTmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($imgTmp, URLROOT . '/img/upload/' . $imgName);

                // sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                // init data
                $data = [
                    'product_name' => trim($_POST['name']),
                    'product_price' => trim($_POST['price']),
                    'product_quantity' => trim($_POST['quantity']),
                    'product_description' => trim($_POST['description']),
                    'product_image' => trim($imgName),
                    'product_name_err' => '',
                    'product_price_err' => '',
                    'product_quantity_err' => '',
                    'product_description_err' => '',
                    'product_image_err' => ''
                ];

                // validate email
                if (empty($data['product_name'])) {
                    $data['product_name_err'] = 'Please enter product name';
                }
                // validate password
                if (empty($data['product_price'])) {
                    $data['product_price_err'] = 'Please enter product price';
                }
                // validate password
                if (empty($data['product_quantity'])) {
                    $data['product_quantity_err'] = 'Please enter product quantity';
                }
                // validate password
                if (empty($data['product_description'])) {
                    $data['product_description_err'] = 'Please enter product description';
                }
                // validate password
                if (empty($data['product_image'])) {
                    $data['product_image_err'] = 'Please enter product image';
                }

                // check if there is no erreur
                if (empty($data['product_name_err']) && empty($data['product_price_err']) && empty($data['product_quantity_err']) && empty($data['product_description_err']) && empty($data['product_image_err']) ) {
                    // check for validate email
                    $insertProduct = $this->productModel->addProduct($data);

                    if ($insertProduct) {
                        // create session
                        die('succe');
                    } else {
                        die('ops');
                    }
                } else {
                    // load view page with error
                    $this->view('Dash/addProduct', $data);
                }


            } else {
                // init data
                $data = [
                    'product_name' => '',
                    'product_price' =>  '',
                    'product_quantity' => '',
                    'product_description' => '',
                    'product_image' => '',
                    'product_name_err' => '',
                    'product_price_err' => '',
                    'product_quantity_err' => '',
                    'product_description_err' => '',
                    'product_image_err' => ''
                ];

                // load view
                $this->view('Dash/addProduct', $data);
            }
        }

    }