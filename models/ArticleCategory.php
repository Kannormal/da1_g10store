<?php

/**
 * Lớp Category: quản lý bảng categories
 * thuộc tính status: 1 - Không xóa, 0 - Đã xóa
 */
class ArticleCategory extends BaseModel
{
    //Danh sách categories
    public function all()
    {
        $sql = "SELECT * FROM article_categories WHERE status=1";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //trả lại dữ liệu
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function alladmin()
    {
        $sql = "SELECT * FROM article_categories WHERE 1";
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
        $sql = "INSERT INTO article_categories(name, image_src, status, description, created_at, update_at) VALUES(:name, :image, :status, :description, :created_at, :update_at)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Cập nhật
    public function update($id, $data)
    {
        $sql = "UPDATE article_categories SET name=:name, image_src=:image, status=:status, description=:description, created_at=:created_at, update_at=:update_at WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        //Thêm id vào data
        //$data['ID'] = $id;
        $stmt->execute($data);
    }

    //Xóa (xóa mềm), không xóa dữ liệu khỏi database mà thay đổi trang thái của thuộc tính status
    public function delete($id)
    {
        $sql = "UPDATE article_categories SET status=0 WHERE id=:ID";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
    //Chi tiết 1 bản ghi
    public function find($id)
    {
        $sql = "SELECT * FROM article_categories WHERE id=:ID";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':ID' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
