<?php

class ImageProduct extends BaseModel
{
    //Danh sách categories
    public function all()
    {
        $sql = "SELECT * FROM product_images ps WHERE status=1";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //trả lại dữ liệu
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function alladmin()
    {
        $sql = "SELECT ps.* , p.name FROM product_images ps JOIN products p ON ps.product_id=p.id WHERE 1";
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
        $sql = "INSERT INTO `product_images` (`ID`, `product_id`, `image_src`, `status`, `created_at`, `updated_at`) VALUES (NULL, :product_id, :image, :status, :created_at, :update_at);";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Cập nhật
    public function update($id, $data)
    {
        $sql = "UPDATE `product_images` SET `product_id` = :product_id, `image_src` = :image, `status` = :status, `created_at`=:created_at, `updated_at` = :update_at WHERE ID = :id";
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
        $sql = "SELECT ps.* , p.name FROM product_images ps JOIN products p ON ps.product_id=p.id WHERE ps.id=:ID";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':ID' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByProduct($id)
    {
        $sql = "SELECT ps.* , p.name FROM product_images ps JOIN products p ON ps.product_id=p.id WHERE ps.product_id=:id AND ps.status=1;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
