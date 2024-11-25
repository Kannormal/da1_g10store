<?php

class Account extends BaseModel
{
    //Danh sách categories
    public function all()
    {
        $sql = "SELECT * FROM account WHERE role != 1";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //trả lại dữ liệu
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function alladmin()
    {
        $sql = "SELECT * FROM account WHERE 1";
        //Chuẩn bị
        $stmt = $this->conn->prepare($sql);
        //Thực thi
        $stmt->execute();
        //trả lại dữ liệu
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($id)
    {
        $sql = "SELECT * FROM account WHERE id=:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
