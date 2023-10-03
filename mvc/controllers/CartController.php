<?php
    class CartController extends Controller {
        public function index() {
            $this->view('master-layout', [
                'page'=>'cart',

            ]);
        }
    }