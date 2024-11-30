<?php

class CartController
{
    public function addCart()
    {
        // unset($_SESSION['cart']);
        $carts = $_SESSION['cart'] ?? [];//Tạo giỏ hàng

        //Lấy id để thêm vào giỏ hàng:
        $id = $_GET['id'];
        //Lấy sp theo id
        $product = (new Product)->find($id);
        //Kiểm tra sp có trong giỏ hàng
        if (isset($carts[$id])) {
            $carts[$id]['quantity'] += 1;
        } else {
            $carts[$id] = [
                'name' => $product['name'],
                'image' => $product['image'],
                'price' => $product['price'],
                'quantity' => 1
            ];
        }
        //Lưu giỏ hàng vào session
        $_SESSION['cart'] = $carts;
// dd($carts);die;
        $uri = $_SESSION['URI']; //Lấy đường dẫn

        header("location:" . $uri);


    }
    //Tính tổng số lượng sp trong giỏ hàng
    public function totalQuantityCart()
    {
        $carts = $_SESSION['cart'] ?? [];
        $totalQuantity = 0;
        foreach ($carts as $cart) {
            $totalQuantity += $cart['quantity'];
        }
        return $totalQuantity;
    }




}