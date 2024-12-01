<?php
class CommentArticle extends BaseModel
{
    //lấy toàn bộ sản phẩm
    public function all()
    {
        $sql = "SELECT c.*, a.name, ac.user_name FROM article_comments c JOIN article a ON c.article_id=a.id JOIN account ac ON c.account_id=ac.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Thêm dữ liệu
    public function create($data)
    {
        $sql = "INSERT INTO `article_comments` (`account_id`, `article_id`, `content`, `status`, `created_at`, `update_at`) VALUES (:account_id, :article_id, :content, :status, :created_at, :updated_at)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Cập nhật
    public function update($id, $data)
    {
        $sql = "UPDATE products SET name=:name,image=:image , price=:price, quantity=:quantity, description=:description, category_id=:category_id, status=:status WHERE id=:id";

        $stmt = $this->conn->prepare($sql);
        //thêm id và mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }

    public function updatestatus($id, $data)
    {
        $sql = "UPDATE `article_comments` SET status=:status WHERE id=:id";

        $stmt = $this->conn->prepare($sql);
        //thêm id và mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }

    //lấy ra 1 bản ghi
    public function find($id)
    {
        $sql = "SELECT * FROM article_comments WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //Xóa sản phẩm
    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }

    //Tìm kiếm sp theo tên
    public function search($keyword = null)
    {
        $sql = "SELECT * FROM products WHERE name LIKE '%$keyword%'";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findByArticle($id)
    {
        $sql = "SELECT c.*, a.name, ac.user_name, ac.image_src FROM article_comments c JOIN article a ON c.article_id=a.id JOIN account ac ON c.account_id=ac.id WHERE c.article_id=:id AND c.status=1;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
