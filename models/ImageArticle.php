<?php

class ImageArticle extends BaseModel
{
    //Danh sách categories
    public function all()
    {
        $sql = "SELECT * FROM article_images ps WHERE status=1";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //trả lại dữ liệu
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function alladmin()
    {
        $sql = "SELECT ai.* , a.name FROM article_images ai JOIN article a ON ai.article_id=a.id WHERE 1";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //trả lại dữ liệu
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Thêm danh mục
    //$data: mảng dữ liệu chứa bản ghi 1 danh mục
    public function create($data)
    {
        var_dump($data);
        $sql = "INSERT INTO `article_images` (`ID`, `article_id`, `image_src`, `status`, `created_at`, `updated_at`) VALUES (NULL, :article_id, :image, :status, :created_at, :update_at);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Cập nhật
    public function update($id, $data)
    {
        $sql = "UPDATE `article_images` SET `article_id` = :article_id, `image_src` = :image, `status` = :status, `created_at`=:created_at, `updated_at` = :update_at WHERE ID = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }

    //Xóa (xóa mềm), không xóa dữ liệu khỏi database mà thay đổi trang thái của thuộc tính status
    public function delete($id)
    {
        $sql = "UPDATE product_images SET status=0 WHERE id=:ID";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
    //Chi tiết 1 bản ghi
    public function find($id)
    {
        $sql = "SELECT ai.* , a.name FROM article_images ai JOIN article a ON ai.article_id=a.id WHERE ai.id=:ID";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':ID' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByArticle($id)
    {
        $sql = "SELECT ai.* , a.name FROM article_images ai JOIN article a ON ai.article_id=a.id WHERE ai.article_ID=:id AND ai.status=1;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
