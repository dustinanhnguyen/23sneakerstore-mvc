<?php 
    class ProductController extends Controller {

        public $productModel;

        public function __construct()
        {
            $this->productModel = $this->model("ProductModel");
        }

        public function index () {

            $this->view('master-layout', [
                'products' => $this->productModel->getAllProduct(),
            ]);

        }

        public function product($id) {

            $this->view('master-layout', [
                'page'=>'product-detail',
                'product'=>$this->productModel->getProduct($id),
            ]);

        }
    }