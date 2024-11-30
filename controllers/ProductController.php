<?php

class ProductController
{
    //Hàm list sẽ lấy các sản phẩm theo danh mục
    public function list()
    {
        $id = $_GET['id']; //id danh mục
        //Lấy sản phẩm theo danh mục
        $products = (new Product)->listProductInCategory($id);

        $title = '';
        if ($products) {
            $title = $products[0]['cate_name'];
        }
        //Lấy danh mục
        $categories = (new Category)->all();

        return view(
            'client.products.category',
            compact('products', 'categories', 'title')
        );
    }

    public function listAll()
    {
        //Lấy sản phẩm theo danh mục
        $products = (new Product)->allStatus1();

        $title = '';
        if ($products) {
            $title = $products[0]['cate_name'];
        }
        //Lấy danh mục
        $categories = (new Category)->all();

        return view(
            'client.products.list',
            compact('products', 'categories', 'title')
        );
    }

    //Hiển thị chi tiết
    public function show()
    {
        //Lấy id của sp
        $id = $_GET['id'];
        //Lấy ra sp theo id
        $product = (new Product)->find($id);

        $comments = (new CommentProduct)->findByProduct($id);

        $images = (new ImageProduct)->findByProduct($id);
        //Lấy title
        $title = $product['name'] ?? '';
        //lấy danh mục
        $categories = (new Category)->all();

        //Lưu URI vào session
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];


        $totalQuantity = (new CartController)->totalQuantityCart();


        return view(
            'client.products.detail',
            compact('product', 'title', 'categories', 'totalQuantity', 'comments', 'images')
        );
    }
}
