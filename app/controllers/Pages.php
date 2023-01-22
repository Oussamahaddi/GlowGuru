

<?php 

    class Pages extends Controller {
        private $productModel;
        public function __construct() {
            // instatiate model object
            $this->productModel = $this->model('Dashboard');
        }

        public function index() {
            $this->view('allPages/index');
        }

        public function marketplace() {
            $products = $this->productModel->getAllProduct();
            $data = [
                'products' => $products
            ];
            $this->view('allPages/marketplace', $data);
        }

    }