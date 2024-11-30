<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang trủ</title>
</head>
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

<body>
    <?php include_once ROOT_DIR . "views/client/header.php" ?>

    <?php include_once ROOT_DIR . "views/client/slider.php" ?>


    <div class="container mt-5">

        <div class="container-fluid py-4">
            <div class="row">
                <h2 style="font-size: 40px;margin:40px 0px;">Sản phẩm mới nhất</h2>
                <!-- Main Content -->
                <main class="col-lg-12 col-md-8 col-12">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <!-- Product Box -->
                        <?php foreach ($products as $product) : ?>
                            <div class="col">
                                <div class="card shadow-sm custom20-radius overflow_hidden">
                                    <img src="<?= $product['image'] ?>"
                                        style="width:100%;height:200px;object-fit:cover" class="card-img-top"
                                        alt="Sản phẩm">
                                    <div class="card-body d-flex flex-column">
                                        <a href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>" style="text-decoration: none;">
                                            <h5 class="card-title"><?= $product['name'] ?></h5>
                                        </a>
                                        <p class="card-text text-danger"><?= number_format($product['price']) ?> VNĐ</p>
                                        <a href="#" class="btn btn-dark mt-auto button-not-dark-blue">Mua ngay &rarr;</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>
                </main>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    </div>
    <br>
    <?php include_once ROOT_DIR . "views/client/footer.php" ?>
</body>

</html>