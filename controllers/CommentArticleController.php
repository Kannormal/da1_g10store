<?php
class CommentArticleController
{
    public function store()
    {
        $data = $_POST;
        var_dump($data);

        if ($_POST['content'] == "") {
            header("location:?ctl=article_detail&id=" . $data['article_id']);
            die;
        }

        $comment = new CommentArticle;
        $comment->create($data);
        header("location:?ctl=article_detail&id=" . $data['article_id']);
    }
}
