<?php
class ArticleController
{
    public function listAll()
    {
        if (!isset($_POST['category_id'])) {
            $_POST['category_id'] = 0;
        }

        if (isset($_POST["search"])) {
            $articles = (new Articles)->findByName($_POST["search"]);
        } else {
            $articles = (new Articles)->allStatus1();
        }

        //Lấy danh mục
        $categories = (new ArticleCategory)->all();

        $products = (new Product)->listProducts();

        return view(
            'client.articles.list',
            compact('articles', 'categories', 'products')
        );
    }

    //Hiển thị chi tiết
    public function show()
    {
        $_POST = "";
        //Lấy id của sp
        $id = $_GET['id'];
        //Lấy ra sp theo id
        $article = (new Articles)->find($id);

        $comments = (new CommentArticle)->findByArticle($id);

        $images = (new ImageArticle)->findByArticle($id);

        //lấy danh mục
        $categories = (new ArticleCategory)->all();


        return view(
            'client.articles.detail',
            compact('article', 'categories', 'comments', 'images')
        );
    }
}
