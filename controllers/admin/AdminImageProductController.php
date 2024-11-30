<?php
// AdminProductController Điều sản phẩm
class AdminImageProductController
{
    // Hàm index để hiển thị ds sản phẩm
    public function all()
    {
        $imageProducts = (new ImageProduct)->alladmin();
        return view("admin.image_products.list", compact('imageProducts'));
    }

    // Hàm create hiển thị form thêm mới
    public function create()
    {
        $products = (new Product)->all();
        return view(
            "admin.image_products.add",
            compact('products')
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

        $category = new ImageProduct;
        $category->create($data);
        header("location: " . ADMIN_URL . "?ctl=listpt_sp");
    }

    // Hàm edit dùng để hiển thị form cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $imageProduct = (new ImageProduct)->find($id);
        $products = (new Product)->all();
        return view(
            "admin.image_products.edit",
            compact('products', 'imageProduct')
        );
    }

    // Cập nhật sản phẩm
    public function update()
    {
        $data = $_POST;


        // Lấy sản phẩm hiện tại
        $imageProduct = new ImageProduct;

        $item = $imageProduct->find($data['id']);

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

        $imageProduct->update($data['id'], $data);

        header("location: " . ADMIN_URL . "?ctl=listpt_sp");
        die;
    }
}
