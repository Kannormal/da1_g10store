<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<style>
    /* Các chỉnh sửa thêm */
    body {
        font-family: 'Inter', sans-serif;
    }

    .sidebar {
        background-color: #EDECEC;
        color: #1F3A56;
        padding: 40px auto;
        text-align: center;
        height: auto;
        text-align: justify;
    }

    .sidebar h3 {
        font-size: 26px;
        margin-top: 90px;
    }

    .info h4 {
        font-size: 22px;
    }

    .sidebar input {
        font-size: 18px;
        width: 80%;
        height: 60px;
        border-radius: 12px;
        border: 2px solid #1F3A56;
        color: #1F3A56;
        margin: 30px 0;
    }

    .sidebar input:hover {
        background-color: #1F3A56;
        color: white;
    }

    .forms select {
        width: 80%;
        height: 60px;
        padding: 16px;
        margin: 15px;
        font-size: 16px;
        background-color: white;
        border: 2px solid #1F3A56;
        border-radius: 50px;
    }


    .forms input {
        width: 80%;
        height: 60px;
        padding: 16px;
        margin: 15px;
        font-size: 16px;
        background-color: white;
        border: 2px solid #1F3A56;
        border-radius: 50px;
    }

    .forms input[type="radio"] {
        width: 10%;
        height: 30px;
        background-color: white;
        border: 2px solid #1F3A56;
        border-radius: 50px;
    }

    .forms textarea {
        width: 80%;
        height: 120px;
        padding: 16px;
        margin: 15px;
        font-size: 16px;
        background-color: white;
        border: 2px solid #1F3A56;
        border-radius: 20px;
    }

    .forms h2 {
        margin: 40px 15px;
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
</style>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 sidebar ">
            <h3>Thêm ảnh bài viết mới</h3>
            <a href="<?= ADMIN_URL . '?ctl=listpt_bv' ?>">
                <input type="button" value="Về Danh sách ->" class="btn button-not-dark-blue ">
            </a>
        </div>

        <!-- Content -->
        <div class="col-md-9 content">
            <div class="forms">
                <h2>Thêm ảnh bài viết</h2>
                <form action="<?= ADMIN_URL . '?ctl=storept_bv' ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <select name="article_id" id="" class="form-control" placeholder="Nhập bài viết chứa ảnh ở đây">
                            <?php foreach ($articles as $article): ?>
                                <option value="<?= $article['ID'] ?>">
                                    <?= $article['name'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class=" form-group">
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="radio" name="status" value="1" checked id="">
                        <label for="status">Được hiện</label>
                        <input type="radio" name="status" value="0" id="">
                        <label for="status">Bị ẩn</label>
                    </div>

                    <input type="date" hidden name="created_at" value="<?= date('Y-m-d') ?>">
                    <input type="date" hidden name="update_at" value="<?= date('Y-m-d') ?>">

                    <input type="submit" value="Thêm ảnh bài viết ->" class="btn button-not-dark-blue ">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Thêm script Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<?php include_once ROOT_DIR . "views/admin/footer.php" ?>