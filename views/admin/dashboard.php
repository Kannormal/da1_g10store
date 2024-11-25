<?php //include_once ROOT_DIR . "views/admin/header.php" 
?>
<!--<h1>trang DASHBOARD</h1>-->
<?php //include_once ROOT_DIR . "views/admin/footer.php" 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị - Trang trủ</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for background and layout */
        body {
            font-family: Inter, sans-serif;
        }

        .container {
            height: auto;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.2);
        }

        .container img {
            width: 400px;
            margin: 50px 0 20px 0;
        }

        .container h2 {
            font-size: 60px;
            font-weight: lighter;
            color: #1F3A56;
            line-height: 60px;
            margin-bottom: 50px;
        }

        a {
            text-decoration: none;
        }

        .box {
            border: 3px solid #1F3A56;
            border-radius: 20px;
            text-align: center;
            color: #1F3A56;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .box:hover {
            background-color: #1F3A56;
            color: white;
        }

        .box h3 {
            font-size: 20px;
            padding: 60px 0px;
        }

        /* Adjust grid for smaller screens */
        @media (max-width: 767px) {
            .box {
                width: 100%;
                margin: 10px 0;
            }
        }
    </style>
</head>

<body>

    <div class="container d-flex flex-column justify-content-center align-items-center">
        <!-- Logo and title -->
        <img src="../img/G10 store - LOGO-.png" alt="Logo">
        <h2>Trang quản trị</h2>

        <!-- Buttons Section -->
        <div class="row row-cols-2 row-cols-md-4 g-3 text-center">
            <div class="col">
                <a href="<?= ADMIN_URL . '?ctl=listct' ?>">
                    <div class="box p-3">
                        <h3>Quản lý Danh Mục</h3>
                    </div>
                </a>

            </div>
            <div class="col">
                <a href="<?= ADMIN_URL . '?ctl=listsp' ?>">
                    <div class="box p-3">
                        <h3>Quản lý Sản Phẩm</h3>
                    </div>
                </a>

            </div>
            <div class="col">
                <div class="box p-3">
                    <h3>Quản lý Tài Khoản</h3>
                </div>
            </div>
            <div class="col">
                <a href="<?= ADMIN_URL . '?ctl=listar' ?>">
                    <div class="box p-3">
                        <h3>Quản lý Bài viết</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <div class="box p-3">
                    <h3>Quản lý Đơn hàng</h3>
                </div>
            </div>
            <div class="col">
                <a href="<?= ADMIN_URL . '?ctl=listbl_sp' ?>">
                    <div class="box p-3">
                        <h3>Quản lý Bình luận</h3>
                    </div>
                </a>
            </div>
            <div class="col">
                <div class="box p-3">
                    <h3>Doanh Số</h3>
                </div>
            </div>
            <div class="col">
                <div class="box p-3">
                    <h3>Đang Phát Triển</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>