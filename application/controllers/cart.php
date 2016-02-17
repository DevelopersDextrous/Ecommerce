<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function addToCart() {
        $userId = $_POST['userId'];
        $itemId = $_POST['itemId'];

        $this->load->model('cart_model');
        $cartValue = $this->cart_model->getCartValue($userId, $itemId);
//        $result = $seat_category;
        echo json_encode($cartValue);
    }

}
