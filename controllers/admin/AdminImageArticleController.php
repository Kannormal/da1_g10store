<?php
// AdminProductController Điều sản phẩm
class AdminImageArticleController
{
    // Hàm index để hiển thị ds sản phẩm
    public function all()
    {
        $ImageArticles = (new ImageArticle)->alladmin();
        return view("admin.image_article.list", compact('ImageArticles'));
    }

    // Hàm create hiển thị form thêm mới
    public function create()
    {
        $articles = (new Articles)->all();
        return view(
            "admin.image_article.add",
            compact('articles')
        );
    }

    // Hàm store dùng để lưu dữ liệu thêm vào database
    public function store()
    {
        $data = $_POST;

        $image = '';
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $image = "img/" . $file['name'];
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
        }
        //them image vào data
        $data['image'] = $image;

        $category = new ImageArticle;
        $category->create($data);
        header("location: " . ADMIN_URL . "?ctl=listpt_bv");
    }

    // Hàm edit dùng để hiển thị form cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $ImageArticle = (new ImageArticle)->find($id);
        $articles = (new Articles)->all();
        return view(
            "admin.image_article.edit",
            compact('articles', 'ImageArticle')
        );
    }

    // Cập nhật sản phẩm
    public function update()
    {
        $data = $_POST;


        // Lấy sản phẩm hiện tại
        $ImageArticle = new ImageArticle;

        $item = $ImageArticle->find($data['id']);

        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$item) {
            die("Sản phẩm không tồn tại với ID: " . $data['id']);
        }

        $image = '';
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $image = "img/" . $file['name'];
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
        }

        $data['image'] = $image;

        $ImageArticle->update($data['id'], $data);

        header("location: " . ADMIN_URL . "?ctl=listpt_bv");
        die;
    }
}
