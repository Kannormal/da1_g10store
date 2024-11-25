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
}
