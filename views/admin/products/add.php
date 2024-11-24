<?php include_once ROOT_DIR . "views/admin/header.php" ?>

<div>
    <form action="<?= ADMIN_URL . '?ctl=storesp' ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="">Tên sản phẩm</label>
            <input type="text" name="name" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Danh mục</label>
            <select name="category_id" id="" class="form-control">
                <?php foreach ($categories as $cate): ?>
                    <option value="<?= $cate['ID'] ?>">
                        <?= $cate['cate_name'] ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <!-- <div class="mb-3">
            <label for="">Hình ảnh</label>
            <input type="file" name="image" id="" class="form-control">
        </div> -->
        <div class="mb-3">
            <label for="">Giá</label>
            <input type="number" name="price" id="" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Số lượng</label>
            <input type="number" name="quantity" id="" class="form-control">
        </div>

        <div class="mb-3">
            <label for="">Trạng thái</label> <br>
            <input type="radio" name="status" value="1" checked id=""> Đang kinh doanh
            <input type="radio" name="status" value="0" id=""> Ngừng kinh doanh
        </div>
        <div class="mb-3">
            <label for="">Mô tả sản phẩm</label>
            <textarea name="description" rows="6" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </div>
    </form>
</div>

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

    .forms input {
        width: 80%;
        height: 60px;
        padding: 16px;
        margin: 15px auto;
        font-size: 16px;
        background-color: white;
        border: 2px solid #1F3A56;
        border-radius: 50px;
    }

    .forms h2 {
        margin: 40px 0px 40px 100px;
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



<?php include_once ROOT_DIR . "views/admin/footer.php" ?>