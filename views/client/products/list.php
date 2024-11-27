<?php include_once ROOT_DIR . "views/client/header.php" ?>

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

<body class="bg-light">

    <div class="container-fluid py-4">
        <div class="row">
            <!-- Sidebar -->
            <aside class="col-lg-3 col-md-4 col-12 bg-light p-3">
                <!-- Phương thức lọc 1 -->
                <div class="mb-4">
                    <h3>Tìm kiếm</h3>
                    <div class="form-text">
                        <input class="form-text-input mt-3 custom20-radius p-2" type="text" name="search"
                            placeholder="Nhập sản phẩm cần tìm ở đây..." style="width: 65%;height: 37px;">
                        <a href="#" class="btn btn-primary mt-0 button-not-dark-blue"
                            style="width: 30%;height: auto;">Tìm kiếm </a>

                    </div>
                </div>
                <div class="mb-4">
                    <h3>Phương thức lọc</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="loc1">
                        <label class="form-check-label" for="loc1">Tiêu chí lọc 1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="loc2">
                        <label class="form-check-label" for="loc2">Tiêu chí lọc 2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="loc3">
                        <label class="form-check-label" for="loc3">Tiêu chí lọc 3</label>
                    </div>
                </div>
                <!-- Phương thức lọc 2 -->
                <div class="mb-4">
                    <h3>Phương thức lọc</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="loc4">
                        <label class="form-check-label" for="loc4">Tiêu chí lọc 1</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="loc5">
                        <label class="form-check-label" for="loc5">Tiêu chí lọc 2</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="loc6">
                        <label class="form-check-label" for="loc6">Tiêu chí lọc 3</label>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="col-lg-9 col-md-8 col-12">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
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
</body>

<?php include_once ROOT_DIR . "views/client/footer.php" ?>