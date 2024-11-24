<?php
// AdminProductController Điều sản phẩm
class AdminProductController
{
    // Hàm index để hiển thị ds sản phẩm
    public function index()
    {
        $products = (new Product)->all();
        return view("admin.products.list", compact('products'));
    }

    // Hàm create hiển thị form thêm mới
    public function create()
    {
        $categories = (new Category)->all();
        $title = "Thêm sản phẩm";
        return view(
            "admin.products.add",
            compact('categories', 'title')
        );
    }

    // Hàm store dùng để lưu dữ liệu thêm vào database
    public function store()
    {
        $data = $_POST;

        $product = new Product;
        $product->create($data);
        header("location: " . ADMIN_URL . "?ctl=listsp");
    }

    // Hàm edit dùng để hiển thị form cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $product = (new Product)->find($id);
        $categories = (new Category)->all();
        $title = "Cập nhật sản phẩm: " . $product['name'];
        return view(
            "admin.products.edit",
            compact('product', 'categories', 'title')
        );
    }

    // Cập nhật sản phẩm
    public function update()
    {
        $data = $_POST;

        // Lấy sản phẩm hiện tại
        $product = new Product;
        $item = $product->find($data['id']);

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
        //them image vào data
        $data['image'] = $image;
        $product->update($data['id'], $data);

        header("location: " . ADMIN_URL . "?ctl=editsp&id=" . $data['id']);
        die;
    }
}
