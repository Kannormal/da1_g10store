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
                <form action="" method="post">
                    <h3>Tìm kiếm</h3>
                    <div class="form-text">
                        <input class="form-text-input mt-3 custom20-radius p-2" type="text" name="search"
                            value="<?= isset($_POST['search']) ? $_POST['search'] : "" ?>"
                            placeholder="Nhập sản phẩm cần tìm ở đây..." style="width: 100%;height: 37px;">
                    </div>
                    <h3 style="margin-top: 25px;">Chọn danh mục sản phẩm</h3>
                    <select name="category_id" id="" class="form-control" placeholder="Nhập sản phẩm được bình luận ở đây">
                        <option value=" 0">Tất cả</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?= $category['ID'] ?>" <?= $_POST['category_id'] == $category['ID'] ? "selected" : "" ?>>
                                <?= $category['cate_name'] ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                    <h3 style="margin-top: 25px;">Lọc theo giá</h3>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="locb1" <?= isset($_POST['locb1']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="locb1">0 - 1.000.000 vnđ</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="locb2" <?= isset($_POST['locb2']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="locb2">1.000.000 - 10.000.000 vnđ</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="locb3" <?= isset($_POST['locb3']) ? "checked" : "" ?>>
                        <label class="form-check-label" for="locb3">> 10.000.000 vnđ</label>
                    </div>
                    <button type="submit" class="btn btn-primary mt-0 button-not-dark-blue"
                        style="width: 30%;height: auto">Tìm kiếm </button>
                </form>
                <!-- Phương thức lọc 1 -->

            </aside>

            <!-- Main Content -->
            <main class="col-lg-9 col-md-8 col-12">
                <h2>Sản phẩm</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <!-- Product Box -->
                    <?php foreach ($products as $product) :
                        if (
                            isset($_POST["locb1"]) && $product['price'] < 1000000
                            || isset($_POST["locb2"]) && $product['price'] >= 1000000 && $product['price'] <= 10000000
                            || isset($_POST["locb3"]) && $product['price'] > 10000000
                            || !isset($_POST["locb1"]) && !isset($_POST["locb2"]) && !isset($_POST["locb3"])
                        ) :
                            if ($product['category_id'] == $_POST['category_id'] || $_POST['category_id'] == 0) : ?>
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
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>

                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include_once ROOT_DIR . "views/client/footer.php" ?>