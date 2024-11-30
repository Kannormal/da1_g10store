<?php

//Hàm render view
function view($path_view, $data = []) {
    extract($data);
    $path_view = str_replace(".", "/", $path_view);
    $full_path = ROOT_DIR . "views/$path_view.php";
    if (!file_exists($full_path)) {
        echo "File not found: $full_path";
    }
    include_once $full_path;
}
//hàm dd dùng để debug lỗi
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}