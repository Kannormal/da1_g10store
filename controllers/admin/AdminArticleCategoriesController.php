<?php
// AdminProductController Điều sản phẩm
class AdminArticleCategoriesController
{
    // Hàm index để hiển thị ds sản phẩm
    public function all()
    {
        $article_categories = (new ArticleCategory)->alladmin();
        return view("admin.article_categories.list", compact('article_categories'));
    }

    // Hàm create hiển thị form thêm mới
    public function create()
    {
        return view(
            "admin.article_categories.add"
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

        $articlecategory = new ArticleCategory;
        $articlecategory->create($data);
        header("location: " . ADMIN_URL . "?ctl=listarct");
    }

    // Hàm edit dùng để hiển thị form cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $articleCategory = (new ArticleCategory)->find($id);
        $title = "Cập nhật danh mục: " . $articleCategory['name'];
        return view(
            "admin.article_categories.edit",
            compact('articleCategory', 'title')
        );
    }

    // Cập nhật sản phẩm
    public function update()
    {
        $data = $_POST;
        var_dump($data);


        // Lấy sản phẩm hiện tại
        $articleCategory = new ArticleCategory;
        $item = $articleCategory->find($data['id']);

        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$item) {
            die("Danh mục với ID không tồn tại: " . $data['id']);
        }


        $image = '';
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $image = "img/" . $file['name'];
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
        }
        //them image vào data
        $data['image'] = $image;

        $articleCategory->update($data['id'], $data);

        //header("location: " . ADMIN_URL . "?ctl=editsp&id=" . $data['id']);
        header("location: " . ADMIN_URL . "?ctl=listarct");
        die;
    }
}
