<?php
    class HomeController extends Controller {
        public function index() {
            $homeController = $this->model("ProductModel");
            $products = $homeController->getNewProduct();
            $this->view("master-layout", [
                'background-page' => 'background-image',
                'products'=>$products,
            ]);
        }
    }