<?php
class Product extends BaseModel
{
    //lấy toàn bộ sản phẩm
    public function all()
    {
        $sql = "SELECT p.*, c.cate_name FROM products p JOIN categories c ON p.category_id=c.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function allStatus1()
    {
        $sql = "SELECT p.*, c.cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE p.status = 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Lấy danh sách sản phẩm theo danh mục
    //@id mã danh mục
    public function listProductInCategory($id)
    {
        $sql = "SELECT p.*, c.cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE c.id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Lấy sản phẩm là điện thoại (type=1)
    public function listProducts()
    {
        $sql = "SELECT p.*, c.cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE type=1 ORDER BY p.id DESC LIMIT 4";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    //Lấy các sản phẩm không phải thú cưng (type=0)
    public function listOtherProduct()
    {
        $sql = "SELECT p.*, c.cate_name FROM products p JOIN categories c ON p.category_id=c.id WHERE type=0 ORDER BY p.id DESC LIMIT 8";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    //Thêm dữ liệu
    public function create($data)
    {
        var_dump($data);
        $sql = "INSERT INTO products(name, image, price, quantity, description, category_id, status, created_at, update_at) VALUES(:name, :image, :price, :quantity, :description, :category_id, :status, :created_at, :update_at)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Cập nhật
    public function update($id, $data)
    {
        $sql = "UPDATE products SET name=:name,image=:image , price=:price, quantity=:quantity, description=:description, category_id=:category_id, status=:status, update_at=:update_at, created_at=:created_at WHERE id=:id";

        $stmt = $this->conn->prepare($sql);
        //thêm id và mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }

    //lấy ra 1 bản ghi
    public function find($id)
    {
        $sql = "SELECT * FROM products WHERE id=:id";
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
}
