<?php
class Articles extends BaseModel
{
    //lấy toàn bộ sản phẩm
    public function all()
    {
        //$sql = "SELECT p.*, c.cate_name FROM products p JOIN categories c ON p.category_id=c.id";
        $sql = "SELECT a.*, c.name as cate_name, ac.user_name FROM article a JOIN article_categories c ON a.category_id=c.id JOIN account ac ON a.account_id=ac.id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        var_dump($data);
        $sql = "INSERT INTO article(name, short, account_id, content, status, category_id) VALUES(:name, :short, :account_id, :content, :status, :category_id)";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute($data);
    }
    //Cập nhật
    public function update($id, $data)
    {
        $sql = "UPDATE article SET name=:name,short=:short , content=:content, account_id=:account_id, category_id=:category_id, status=:status WHERE id=:id";

        $stmt = $this->conn->prepare($sql);
        //thêm id và mảng data
        $data['id'] = $id;
        $stmt->execute($data);
    }

    //lấy ra 1 bản ghi
    public function find($id)
    {
        $sql = "SELECT * FROM article WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
