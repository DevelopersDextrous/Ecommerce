<?php

class Cart_model extends CI_Model {

    public function getCartValue($userId, $itemId) {

//        $content = array(
//            'invoice' => uniqid(),
//            'user_id' => $userId,
//            'prod_id' => $itemId,
//            'quantity' => 1,
//            'order_date' => date("Y-m-d"),
//            'order_tim' => date("G:i:s")
//        );

        $sql = "INSERT INTO orders (user_id, prod_id) VALUES ('$userId', '$itemId')";
        
//        $this->db->insert('orders', $content);
        return date("Y-m-d");
    }

}

?>