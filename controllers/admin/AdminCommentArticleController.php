<?php
// AdminProductController Điều sản phẩm
class AdminCommentArticleController
{
    // Hàm index để hiển thị ds sản phẩm
    public function index()
    {
        $comments = (new CommentArticle)->all();
        return view("admin.comment_articles.list", compact('comments'));
    }

    // Hàm create hiển thị form thêm mới
    public function create()
    {
        $articles = (new Articles)->all();
        $accounts = (new Account)->alladmin();
        return view(
            "admin.comment_articles.add",
            compact('articles', 'accounts')
        );
    }

    // Hàm store dùng để lưu dữ liệu thêm vào database
    public function store()
    {
        $data = $_POST;

        $comment = new CommentArticle;
        $comment->create($data);
        header("location: " . ADMIN_URL . "?ctl=listbl_bv");
    }

    // Hàm edit dùng để hiển thị form cập nhật
    public function edit()
    {
        $id = $_GET['id'];
        $comment = (new CommentArticle)->find($id);
        $articles = (new Articles)->find($comment['article_id']);
        $account = (new Account)->find($comment['account_id']);
        return view(
            "admin.comment_articles.edit",
            compact('articles', 'account', 'comment')
        );
    }

    // Cập nhật sản phẩm
    public function updatestatus()
    {
        $data = $_POST;
        var_dump($data);

        // Lấy sản phẩm hiện tại
        $comment = new CommentArticle;
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
        header("location: " . ADMIN_URL . "?ctl=listbl_bv");
        die;
    }
}
