<?php
class HomeController
{
    public function index()
    {
        //Lấy danh sách pets
        $product = new Product;
        $article = new Articles;
        $products = $product->listProducts();
        $articles = $article->Articlelist4();

        return view(
            'client.home',
            compact('products', 'articles')
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
