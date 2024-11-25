<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản trị sản phẩm</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
</style>

<body>
    <?php include_once ROOT_DIR . "views/admin/header.php" ?>

    <div class="container my-5">
        <a href="<?= ADMIN_URL . "?ctl=addar" ?>"
            class="btn btn-dark button-not-dark-blue" style="margin-bottom: 20px;float: right;">
            Thêm Bài viết mới +
        </a>
        <table class="table table-bordered p-10 table-striped">
            <thead class="table-dark " style="background-color: #1F3A56;">
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Short</th>
                    <th scope="col">Content</th>
                    <th scope="col">Status</th>
                    <th scope="col">Category</th>
                    <th scope="col">Author</th>
                    <th scope="col">Update?</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($articles as $article) : ?>
                    <tr>
                        <th scope="row"><?= $article['ID'] ?></th>
                        <td><?= $article['name'] ?></td>
                        <td><?= $article['short'] ?></td>
                        <td><?= $article['content'] ?></td>
                        <td><?= $article['status'] ? 'Được hiện' : 'Bị Ẩn' ?></td>
                        <td><?= $article['cate_name'] ?></td>
                        <td><?= $article['user_name'] ?></td>
                        <td>
                            <a href="<?= ADMIN_URL . '?ctl=editar&id=' . $article['ID'] ?>" class="btn btn-dark button-not-dark-blue">Cập nhật</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <?php include_once ROOT_DIR . "views/admin/footer.php" ?>

    <!-- Bootstrap JS and Popper.js (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>