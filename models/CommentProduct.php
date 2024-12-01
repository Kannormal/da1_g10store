<?php
class CommentProduct extends BaseModel
{
    //lấy toàn bộ sản phẩm
    public function all()
    {
        $sql = "SELECT c.*, p.name, a.user_name FROM product_comments c JOIN products p ON c.product_id=p.id JOIN account a ON c.account_id=a.id ORDER BY c.created_at DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Thêm dữ liệu
    public function create($data)
    {
        var_dump($data);
        $sql = "INSERT INTO `product_comments` (`account_id`, `product_id`, `rate`, `description`, `status`, `created_at`, `updated_at`) VALUES (:account_id, :product_id, :rate, :description, :status, :created_at, :updated_at)";

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
        $sql = "UPDATE `product_comments` SET status=:status WHERE id=:id";

        $stmt = $this->conn->prepare($sql);
        //thêm id và mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }

    //lấy ra 1 bản ghi
    public function find($id)
    {
        $sql = "SELECT * FROM product_comments WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByProduct($id)
    {
        $sql = "SELECT c.*, a.user_name, a.image_src FROM product_comments c JOIN products p ON c.product_id=p.id JOIN account a ON c.account_id=a.id WHERE p.id=:id AND c.status=1;";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
}
