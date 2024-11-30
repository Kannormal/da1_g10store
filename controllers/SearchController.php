<?php

class SearchController{
    public function search(){
        //Lấy từ khoá tìm kiếm
        $keyword = $_GET['keyword'];
        // dd($keyword);die;
        //Lấy dữ liệu tìm được
        $products = (new Product)->search($keyword);

        return view("client.search", compact('keyword','products'));
    }
}

