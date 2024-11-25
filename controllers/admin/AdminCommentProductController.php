<?php
// AdminProductController Điều sản phẩm
class AdminCommentProductController
{
    // Hàm index để hiển thị ds sản phẩm
    public function index()
    {
        $comments = (new CommentProduct)->all();
        return view("admin.comment_products.list", compact('comments'));
    }

    // Hàm create hiển thị form thêm mới
    public function create()
    {
        $products = (new Product)->all();
        $accounts = (new Account)->alladmin();
        return view(
            "admin.comment_products.add",
            compact('products', 'accounts')
        );
    }

    // Hàm store dùng để lưu dữ liệu thêm vào database
    public function store()
    {
        $data = $_POST;

        $comment = new CommentProduct;
        $comment->create($data);
        header("location: " . ADMIN_URL . "?ctl=listbl_sp");
    }

    // Hàm edit dùng để hiển thị form cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $comment = (new CommentProduct)->find($id);
        $product = (new Product)->find($comment['product_id']);
        $account = (new Account)->find($comment['account_id']);
        return view(
            "admin.comment_products.edit",
            compact('product', 'account', 'comment')
        );
    }

    // Cập nhật sản phẩm
    public function updatestatus()
    {
        $data = $_POST;
        var_dump($data);

        // Lấy sản phẩm hiện tại
        $comment = new CommentProduct;
        $item = $comment->find($data['id']);

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
        $comment->updatestatus($data['id'], $data);

        //header("location: " . ADMIN_URL . "?ctl=editsp&id=" . $data['id']);
        header("location: " . ADMIN_URL . "?ctl=listbl_sp");
        die;
    }
}
