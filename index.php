<?php
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/common/function.php";
require_once __DIR__ . "/models/BaseModel.php";
require_once __DIR__ . "/models/Category.php";
require_once __DIR__ . "/models/Product.php";


require_once __DIR__ . "/controllers/ProductController.php";
require_once __DIR__ . "/controllers/HomeController.php";

$ctl = $_GET['ctl'] ?? '';


match ($ctl) {
    '', 'home' => (new HomeController)->index(),
    'category' => (new ProductController)->list(),
    default => view("errors.404"),
};
