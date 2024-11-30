<?php
class HomeController
{
    public function index()
    {
        //Lấy danh sách pets
        $product = new Product;
        $products = $product->listProducts();
        $list_products = $product->listOtherProduct();

        //Danh mục
        $categories = (new Category)->all();

        return view(
            'client.home',
            compact('products', 'list_products', 'categories')
        );
    }
    public function register()
    {
        return view(
            'client.register'
        );
    }
    public function login()
    {
        return view(
            'client.login'
        );
    }
}
