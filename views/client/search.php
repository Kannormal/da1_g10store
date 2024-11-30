<?php include_once ROOT_DIR . "views/client/header.php" ?>

<div class="container mt-5">
    <div class="mb-5">
        Từ khoá tìm kiếm: <?= $keyword ?>
    </div>
    <div class="row g-4">
        <?php
        if ($products):
            ?>
            <?php foreach ($products as $product): ?>
                <!-- Box Sản Phẩm -->
                <div class="col-md-3">
                    <div class="product-box">
                        <img src="<?= $product['image'] ?>" alt="Product Image" class="product-img" width="180px">
                        <div class="product-info">
                            <a href="<?= ROOT_URL . '?ctl=detail&id=' . $product['id'] ?>">
                                <h5 class="product-name"><?= $product['name'] ?></h5>
                            </a>
                            <div>
                                <span class="product-price">
                                    <?= number_format($product['price']) ?> vnđ
                                </span>
                            </div>
                            <div class="product-buttons">

                                <button class="btn btn-outline-success">Thêm vào giỏ hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        <?php else: ?>
            <div>Không tìm thấy từ khoá</div>
        <?php endif ?>
    </div>
</div>

<?php include_once ROOT_DIR . "views/client/footer.php" ?>