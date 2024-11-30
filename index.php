<?php
session_start();
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/common/function.php";
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/ArticleCategory.php";
require_once __DIR__ . "/models/Articles.php";
require_once __DIR__ . "/models/Accounts.php";
require_once __DIR__ . "/models/CommentProduct.php";
require_once __DIR__ . "/models/CommentArticle.php";
require_once __DIR__ . "/models/ImageProduct.php";
require_once __DIR__ . "/models/ImageArticle.php";

date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once __DIR__ . "/controllers/ProductController.php";
require_once __DIR__ . "/controllers/HomeController.php";
require_once __DIR__ . "/controllers/SearchController.php";
require_once __DIR__ . "/controllers/CartController.php";

$ctl = $_GET['ctl'] ?? '';


match ($ctl) {
    '', 'home' => (new HomeController)->index(),
    'product-list' => (new ProductController)->listAll(),
    'category' => (new ProductController)->list(),
    'search' => (new SearchController)->search(),
    'detail' => (new ProductController)->show(),
    'add-cart' => (new CartController)->addCart(),
    'register' => (new HomeController)->register(),
    'login' => (new HomeController)->login(),
    'banned' => view("errors.banned"),
    default => view("errors.404"),
};
