<?php
// AdminProductController Điều sản phẩm
class AdminCategoriesController
{
    // Hàm index để hiển thị ds sản phẩm
    public function all()
    {
        $categories = (new Category)->alladmin();
        return view("admin.categories.list", compact('categories'));
    }

    // Hàm create hiển thị form thêm mới
    public function create()
    {
        return view(
            "admin.categories.add"
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

        $category = new Category;
        $category->create($data);
        header("location: " . ADMIN_URL . "?ctl=listct");
    }

    // Hàm edit dùng để hiển thị form cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $category = (new Category)->find($id);
        $title = "Cập nhật danh mục: " . $category['cate_name'];
        return view(
            "admin.categories.edit",
            compact('category', 'title')
        );
    }

    // Cập nhật sản phẩm
    public function update()
    {
        $data = $_POST;
        var_dump($data);

        $image = '';
        $file = $_FILES['image'];
        if ($file['size'] > 0) {
            $image = "img/" . $file['name'];
            move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
        }
        //them image vào data
        $data['image'] = $image;

        // Lấy sản phẩm hiện tại
        $category = new Category;
        $item = $category->find($data['id']);

        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$item) {
            die("Danh mục với ID không tồn tại: " . $data['id']);
        }

        //$image = '';
        //$file = $_FILES['image'];
        //if ($file['size'] > 0) {
        //$image = "img/" . $file['name'];
        //move_uploaded_file($file['tmp_name'], ROOT_DIR . $image);
        //}

        //$data['image'] = $image;
        $category->update($data['id'], $data);

        //header("location: " . ADMIN_URL . "?ctl=editsp&id=" . $data['id']);
        header("location: " . ADMIN_URL . "?ctl=listct");
        die;
    }
}
