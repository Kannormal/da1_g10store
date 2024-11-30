<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <!-- Thêm liên kết Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Inter, sans-serif;
            margin: 0;
            background-color: #F5F7FA;
        }

        header {
            background-color: #F5F7FA;
            padding: 20px 0;
        }

        header img {
            height: 60px;
            padding: 0 30px;
        }

        .navbar-nav li {
            margin-right: 20px;
        }

        .navbar-nav a {
            color: #1F3A56;
            font-size: 1.2em;
        }

        .navbar-nav a:hover {
            text-decoration: underline;
        }

        .buttons a {
            padding: 10px 20px;
            border-radius: 15px;
            text-decoration: none;
            margin-left: 10px;
        }

        .buttons a.btn-primary {
            background-color: #1F3A56;
            color: white;
            border: 1px solid #1F3A56;
            margin-bottom: 10px;
        }

        .buttons a.btn-primary:hover {
            background-color: white;
            color: #1F3A56;
            border: 1px solid #1F3A56;
        }

        .buttons a.btn-secondary {
            background-color: white;
            color: #1F3A56;
            border: 1px solid #1F3A56;
            margin-bottom: 10px;
        }

        .buttons a.btn-secondary:hover {
            background-color: #1F3A56;
            color: white;
            border: 1px solid white;
        }

        .bg-primary-dark-blue {
            background-color: #1F3A56 !important;
        }

        .button-not-dark-blue:hover {
            background-color: #1F3A56;
            color: white;
        }

        .button-not-dark-blue {
            background-color: white;
            color: #1F3A56;
            border-radius: 7px;
        }

        .text-dark-blue {
            color: #1F3A56;
        }

        .form-check-input:checked {
            background-color: #1F3A56;
            /* Màu nền khi chọn */
            border-color: #1F3A56;
            /* Màu viền khi chọn */

        }

        /* Thay đổi màu khi hover lên checkbox */
        .form-check-input:hover {
            border-color: #1F3A56;
            /* Màu viền khi hover */
        }

        .custom20-radius {
            border-radius: 20px;
            /* Custom border-radius value */
        }

        .overflow_hidden {
            overflow: hidden;
        }
    </style>
</head>

<body>

    <header class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <!-- Logo -->
            <a href="<?= ROOT_URL ?>"><img src="img/G10 store - LOGO-.png" alt="Logo"></a>

            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ROOT_URL ?>">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= ROOT_URL . '?ctl=product-list' ?>">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin tức</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Buttons -->
            <div class="buttons">
                <a href="<?= ROOT_URL . '?ctl=login' ?>" class="btn btn-secondary">Đăng nhập</a>
                <a href="<?= ROOT_URL . '?ctl=register' ?>" class="btn btn-primary">Đăng ký</a>
            </div>
        </div>
    </header>

    <!-- Thêm liên kết Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= ROOT_URL ?>">
                        <img src="img/Logo.png" alt="" height="60px" width="60px">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="<?= ROOT_URL ?>">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= ROOT_URL . '?ctl=category&id=2' ?>">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giỏ hàng (<?= $totalQuantity ?>) </a>
                            </li>

                        </ul>
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="keyword">
                            <button class="btn btn-outline-success" type="button" id="search">Search</button>
                        </form>
                        <div class="buttons">
                            <a href="<?= ROOT_URL . '?ctl=login' ?>">Đăng nhập</a>
                            <a href="<?= ROOT_URL . '?ctl=register' ?>" class="a2">Đăng ký</a>
                        </div>
                    </div>
                </div>
            </nav>
    </header>