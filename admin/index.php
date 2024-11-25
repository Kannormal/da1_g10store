<?php
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../common/function.php";

//include models
require_once __DIR__ . "/../models/BaseModel.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/ArticleCategory.php";


//include controllers
require_once __DIR__ . "/../controllers/admin/AdminProductController.php";
require_once __DIR__ . "/../controllers/admin/AdminCategoriesController.php";
require_once __DIR__ . "/../controllers/admin/AdminArticleCategoriesController.php";


$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    '' => view("admin.dashboard"),
    //Quản lý sản phẩm
    'listsp' => (new AdminProductController)->index(),
    'addsp' => (new AdminProductController)->create(),
    'storesp' => (new AdminProductController)->store(),
    'editsp' => (new AdminProductController)->edit(),
    'updatesp' => (new AdminProductController)->update(),
    // Quản lý Danh mục (Sản Phẩm)
    'listct' => (new AdminCategoriesController)->all(),
    'addct' => (new AdminCategoriesController)->create(),
    'storect' => (new AdminCategoriesController)->store(),
    'editct' => (new AdminCategoriesController)->edit(),
    'updatect' => (new AdminCategoriesController)->update(),
    // Quản lý Danh mục (Bài viết)
    'listarct' => (new AdminArticleCategoriesController)->all(),
    'addarct' => (new AdminArticleCategoriesController)->create(),
    'storearct' => (new AdminArticleCategoriesController)->store(),
    'editarct' => (new AdminArticleCategoriesController)->edit(),
    'updatearct' => (new AdminArticleCategoriesController)->update(),
        //Mặc định
    default => view('errors.404'),
};
