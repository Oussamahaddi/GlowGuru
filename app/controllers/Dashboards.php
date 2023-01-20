

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

    }