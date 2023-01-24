

<?php

    class Dashboards extends Controller {
        private $productModel;
        private $adminModel;
        public function __construct() {
            $this->productModel = $this->model('Dashboard');
            $this->adminModel = $this->model('Admin');
        }

        public function Statistique() {
            $productState = $this->productModel->getStateProduct();
            $admin = $this->adminModel->getAllAdmin();
            $data = [
                'products_stats' => $productState,
                'admin' => $admin
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

                $count = count($_POST['name']);

                for ($i = 0; $i < $count; $i++) {
                    // sanitize post data
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    // init data
                    move_uploaded_file($_FILES['image']['tmp_name'][$i], 'img/upload/' . $_FILES['image']['name'][$i]);
                    $data = [
                        'product_name' => $_POST['name'][$i],
                        'product_description' => $_POST['description'][$i],
                        'product_price' => $_POST['price'][$i],
                        'product_quantity' => $_POST['quantity'][$i],
                        'product_image' => $_FILES['image']['name'][$i],
                    ];

                    // check for validate email
                    $addPoruct = $this->productModel->add($data);

                    if ($addPoruct) {
                        // redirect to product page
                        redirect('Dashboards/product');
                    } else {
                        die('ops');
                    }
                }

            } else {

                // init data
                $data = [
                    'product_name' => '',
                    'product_price' =>  '',
                    'product_quantity' => '',
                    'product_description' => '',
                    'product_image' => '',
                ];

                $this->view('Dash/addProduct', $data);
            }
        }

        public function deleteProduct($id) {
            // get response from data if deleted or not return true or false
            if ($this->productModel->delet($id)) {
                redirect('Dashboards/product');
            } else {
                die('ops');
            }
        }

        public function editProduct($id) {
            // check for post
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // process form
                $imgName = $_FILES['image']['name'];
                $imgTmp = $_FILES['image']['tmp_name'];
                move_uploaded_file($imgTmp, 'img/upload/' . $imgName);

                // get product id
                $productId = $this->productModel->getProductById($id);

                if (!empty($imgName)) {
                    // init data
                    $data = [
                        'id' => $productId->id,
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
                } else {
                    // init data without image
                    $data = [
                        'id' => $productId->id,
                        'product_name' => trim($_POST['name']),
                        'product_price' => trim($_POST['price']),
                        'product_quantity' => trim($_POST['quantity']),
                        'product_description' => trim($_POST['description']),
                        'product_image' => $productId->product_image,
                        'product_name_err' => '',
                        'product_price_err' => '',
                        'product_quantity_err' => '',
                        'product_description_err' => '',
                        'product_image_err' => ''
                    ];
                }

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

                // check if there is no erreur
                if (empty($data['product_name_err']) && empty($data['product_price_err']) && empty($data['product_quantity_err']) && empty($data['product_description_err'])) {
                    // check for validate email
                    $editProduct = $this->productModel->edit($data);

                    if ($editProduct) {
                        // redirect to product page
                        redirect('Dashboards/product');
                    } else {
                        die('ops');
                    }
                } else {
                    // load view page with error
                    $this->view('Dash/editProduct', $data);
                }


            } else {
                
                // get product id
                $productId = $this->productModel->getProductById($id);

                // init data
                $data = [
                    'id' => $productId->id,
                    'product_name' => $productId->product_name,
                    'product_price' =>  $productId->product_price,
                    'product_quantity' => $productId->product_quantity,
                    'product_description' => $productId->product_description,
                    'product_image' => $productId->product_image,
                    'product_name_err' => '',
                    'product_price_err' => '',
                    'product_quantity_err' => '',
                    'product_description_err' => '',
                    'product_image_err' => ''
                ];

                // load view
                $this->view('Dash/editProduct', $data);
            }
        }

    }