<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Thêm liên kết Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

        .text-dark-blue {
            color: #1F3A56;
        }

        .table-dark th {
            background-color: #1F3A56 !important;
        }

        body {
            font-family: Inter, sans-serif;
            background-color: #F5F7FA;
            margin: 0;
        }

        header {
            background-color: #F5F7FA;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header img {
            width: 250px;
            height: 60%;
            padding-left: 30px;
            padding-right: 30px;
        }

        header h3 {
            color: #1F3A56;
            font-size: 30px;
            margin: 0;
        }

        .buttons a {
            padding: 10px 20px;
            border-radius: 15px;
            text-decoration: none;
            display: inline-block;
            background-color: white;
            color: #1F3A56;
            border: 1px solid #1F3A56;
            margin-right: 70px;
        }

        .buttons a:hover {
            background-color: #1F3A56;
            color: white;
            border: 1px solid white;
        }
    </style>
</head>

<body>

    <header class="container-fluid">
        <!-- Logo -->
        <div>
            <img src="../img/G10 store - LOGO-.png" alt="Logo">
        </div>

        <!-- Title -->
        <nav class="d-flex justify-content-center">
            <h3>TRANG QUẢN TRỊ</h3>
        </nav>

        <!-- Button -->
        <div class="buttons">
            <a href="<?= ADMIN_URL ?>">Quay Về -></a>
        </div>
    </header>

    <!-- Thêm liên kết Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<!--  <?= $title ?? '' ?>  -->
<!--<form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>-->