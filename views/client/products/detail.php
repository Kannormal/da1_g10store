<?php include_once ROOT_DIR . "views/client/header.php" ?>

<style>
    .comments {
        padding: 40px 0;
    }

    .comment {
        padding: 20px 0;
        display: flex;
    }

    .account {
        width: 15%;
        text-align: center;
    }

    .account img {
        width: 100%;
        max-width: 100px;
        height: 100px;
        object-fit: cover;
        border-radius: 50%;
    }

    .content {
        width: 85%;
        padding-left: 20px;
    }

    .box {
        background-color: #1F3A56;
        padding: 5px 2%;
        border-radius: 20px;
        margin-top: 10px;
    }

    .box h6 {
        background-color: aliceblue;
        border-radius: 20px;
        padding: 15px 5%;
    }

    .rateselector {
        width: 15%;
        height: 45px;
        padding: 10px 2%;
        border-radius: 20px;
    }

    .submitcomment {
        width: 15%;
        height: 45px;
        padding: 10px 2%;
        border-radius: 20px;
        margin-top: 25px;
        background-color: white;
        color: #1F3A56;
    }

    .submitcomment:hover {
        background-color: #1F3A56;
        color: white;
    }
</style>

<div class="container mt-5">
    <div class="row">
        <!-- Hình ảnh sản phẩm -->
        <div class="col-md-6">
            <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide đầu tiên -->
                    <div class="carousel-item active">
                        <img src="<?= ROOT_URL . $product['image'] ?>" class="d-block w-100" alt="" width="100%" height="400px" style="object-fit: cover;">
                    </div>
                    <!-- Slide sau -->
                    <?php foreach ($images as $image) : ?>
                        <div class="carousel-item">
                            <img src="<?= ROOT_URL . $image['image_src'] ?>" class="d-block w-100" alt="" width="100%" height="400px" style="object-fit: cover;">
                        </div>
                    <?php endforeach; ?>

                </div>
                <!-- Các nút điều hướng -->
                <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Thông tin sản phẩm -->
        <div class="col-md-6">
            <h1 class="display-5"><?= $product['name'] ?></h1>
            <p class="text-muted">Trạng thái:
                <?php if ($product['quantity'] > 0): ?>
                    <span class="badge bg-success">Còn hàng</span> <!-- Thay đổi theo trạng thái -->
                <?php else : ?>
                    <span class="badge bg-success">Hết hàng</span> <!-- Thay đổi theo trạng thái -->
                <?php endif ?>

            </p>
            <h3 class="text-danger">Giá: <?= number_format($product['price']) ?> VNĐ</h3>
            <p><strong>Số lượng còn:</strong> <?= $product['quantity'] ?></p>
            <p class="mt-4">
                <strong>Mô tả sản phẩm:</strong><br>
                <?= $product['description'] ?>
            </p>
            <!-- Nút thêm vào giỏ hàng -->
            <div class="mt-4">
                <a class="btn btn-primary btn-lg" href="<?= ROOT_URL . '?ctl=add-cart&id=' . $product['id'] ?>">
                    <i class="bi bi-cart-plus"></i> Thêm vào giỏ hàng
                </a>
            </div>
        </div>
    </div>

    <!-- Thêm phần mô tả chi tiết nếu cần -->
    <div class="row mt-5">
        <div class="col">
            <h2>Mô tả chi tiết</h2>
            <p>
                <?= $product['description'] ?>
            </p>
        </div>
    </div>

    <div class="row mt-5">
        <h2>Bình luận</h2>

        <form action="?ctl=addbl_sp" method="post">
            <div class="comment d-flex">
                <div class="content">
                    <h5 class="mb-3">Điểm đánh giá:</h5>
                    <select name="rate" class="rateselector">
                        <option value="1">1/5</option>
                        <option value="2">2/5</option>
                        <option value="3">3/5</option>
                        <option value="4">4/5</option>
                        <option value="5">5/5</option>
                    </select>
                    <div class="box">
                        <h6>
                            <textarea name="description" style="width: 100%" id="" placeholder="Nhập nội dung bình luận ở đây..."></textarea>
                        </h6>
                    </div>
                    <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                    <input type="hidden" name="account_id" value="3">
                    <input type="date" hidden name="created_at" value="<?= date('Y-m-d') ?>">
                    <input type="date" hidden name="updated_at" value="<?= date('Y-m-d') ?>">
                    <input type="hidden" name="status" value="1">

                    <button type="submit" class="submitcomment">Đăng bình luận</button>
                </div>
                <div class="account">
                    <img src="img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg" alt="Avatar">
                    <h5 class="mt-2">ADMIN1</h5>
                </div>
            </div>
        </form>
        <div class="col">
            <?php
            foreach ($comments as $comment) : ?>
                <div class="comment d-flex">
                    <div class="account">
                        <img src="<?= $comment['image_src']  ?>" alt="Avatar">
                        <h5 class="mt-2"><?= $comment['user_name']  ?></h5>
                    </div>
                    <div class="content">
                        <h5 class="mb-3">Điểm đánh giá:<?= $comment['rate']  ?>/5 , <?= $comment['created_at']  ?></h5>
                        <div class="box">
                            <h6>
                                <?= $comment['description']  ?>
                            </h6>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</div>

<?php include_once ROOT_DIR . "views/client/footer.php" ?>