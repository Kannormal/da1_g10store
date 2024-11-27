<?php
require_once __DIR__ . "/../env.php";
require_once __DIR__ . "/../common/function.php";

//include models
require_once __DIR__ . "/../models/BaseModel.php";
require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/Product.php";
require_once __DIR__ . "/../models/ArticleCategory.php";
require_once __DIR__ . "/../models/Articles.php";
require_once __DIR__ . "/../models/Accounts.php";
require_once __DIR__ . "/../models/CommentProduct.php";
require_once __DIR__ . "/../models/CommentArticle.php";



date_default_timezone_set('Asia/Ho_Chi_Minh');


//include controllers
require_once __DIR__ . "/../controllers/admin/AdminProductController.php";
require_once __DIR__ . "/../controllers/admin/AdminCategoriesController.php";
require_once __DIR__ . "/../controllers/admin/AdminArticleCategoriesController.php";
require_once __DIR__ . "/../controllers/admin/AdminArticleController.php";
require_once __DIR__ . "/../controllers/admin/AdminCommentProductController.php";
require_once __DIR__ . "/../controllers/admin/AdminCommentArticleController.php";





$ctl = $_GET['ctl'] ?? "";

match ($ctl) {
    '' => view("admin.dashboard"),
    //Quản lý sản phẩm
    'listsp' => (new AdminProductController)->index(),
    'addsp' => (new AdminProductController)->create(),
    'storesp' => (new AdminProductController)->store(),
    'editsp' => (new AdminProductController)->edit(),
    'updatesp' => (new AdminProductController)->update(),
    //Quản lý bình luận sản phẩm
    'listbl_sp' => (new AdminCommentProductController)->index(),
    'addbl_sp' => (new AdminCommentProductController)->create(),
    'storebl_sp' => (new AdminCommentProductController)->store(),
    'editbl_sp' => (new AdminCommentProductController)->edit(),
    'updatestatusbl_sp' => (new AdminCommentProductController)->updatestatus(),
    //Quản lý bài viết
    'listar' => (new AdminArticlesController)->index(),
    'addar' => (new AdminArticlesController)->create(),
    'storear' => (new AdminArticlesController)->store(),
    'editar' => (new AdminArticlesController)->edit(),
    'updatear' => (new AdminArticlesController)->update(),
    ////Quản lý bình luận bài viết(chưa hoàn thiện)
    'listbl_bv' => (new AdminCommentArticleController)->index(),
    'addbl_bv' => (new AdminCommentArticleController)->create(),
    'storebl_bv' => (new AdminCommentArticleController)->store(),
    'editbl_bv' => (new AdminCommentArticleController)->edit(),
    'updatestatusbl_bv' => (new AdminCommentArticleController)->updatestatus(),
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
