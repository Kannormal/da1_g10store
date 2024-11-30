<?php
// AdminarticlesController Điều sản phẩm
class AdminArticlesController
{
    // Hàm index để hiển thị ds sản phẩm
    public function index()
    {
        $articles = (new Articles)->all();
        return view("admin.articles.list", compact('articles'));
    }

    // Hàm create hiển thị form thêm mới
    public function create()
    {
        $categories = (new ArticleCategory)->all();
        $accounts = (new Account)->all();
        //$title = "Thêm sản phẩm";
        return view(
            "admin.articles.add",
            compact('categories', 'accounts')
        );
    }

    // Hàm store dùng để lưu dữ liệu thêm vào database
    public function store()
    {
        $data = $_POST;

        $articles = new Articles;
        $articles->create($data);
        header("location: " . ADMIN_URL . "?ctl=listar");
    }

    // Hàm edit dùng để hiển thị form cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $article = (new articles)->find($id);
        $categories = (new Category)->all();
        $accounts = (new Account)->all();
        return view(
            "admin.articles.edit",
            compact('article', 'categories', 'accounts')
        );
    }

    // Cập nhật sản phẩm
    public function update()
    {
        $data = $_POST;
        var_dump($data);

        // Lấy sản phẩm hiện tại
        $articles = new articles;
        $item = $articles->find($data['id']);

        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$item) {
            die("Sản phẩm không tồn tại với ID: " . $data['id']);
        }

        //$image = '';
        //$file = $_FILES['image'];
        //if ($file['size'] > 0) {
        //$image = "img/" . $file['name'];
        //move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
        //}
        //them image vào data
        //$data['image'] = $image;
        $articles->update($data['id'], $data);

        //header("location: " . ADMIN_URL . "?ctl=editsp&id=" . $data['id']);
        header("location: " . ADMIN_URL . "?ctl=listar");
        die;
    }
}
