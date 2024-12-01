<?php
class CommentProductController
{
    public function store()
    {
        $data = $_POST;

        if ($_POST['description'] == "") {
            header("location:?ctl=detail&id=" . $data['product_id']);
            die;
        }

        $comment = new CommentProduct;
        $comment->create($data);
        header("location:?ctl=detail&id=" . $data['product_id']);
    }
}
