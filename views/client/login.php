<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Đăng Ký</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
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
</style>

<body
    style="background-image: url('img/dien-thoai-co-man-hinh-dep-nhat-xtmobile.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100 justify-content-center">
            <!-- Registration Form Section -->
            <div class="col-md-4 bg-white p-4 rounded-3 border border-2 border-dark mt-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <a href="<?= ROOT_URL ?>" class="text-decoration-none text-dark-blue">← Quay lại</a>
                    <div>
                        <span>Chưa có tài khoản? </span>
                        <a href="<?= ROOT_URL . '?ctl=register' ?>" class="text-decoration-none text-dark-blue">Đăng ký</a>
                    </div>
                </div>
                <h2 class="text-center mb-4">Đăng Ký</h2>
                <form action="" method="post">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="user"
                            placeholder="Nhập tên đăng nhập hoặc email ở đây">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Nhập mặt khẩu ở đây">
                    </div>

                    <!-- Checkbox for terms and conditions -->
                    <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" name="check" id="check" aria-label="check">
                        <label class="form-check-label" for="check">Tôi Đồng ý Với <a href="#"
                                class="text-decoration-none text-dark-blue">Điều khoản và dịch vụ</a></label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-outline-dark w-100 py-2 fs-5 button-not-dark-blue">Đăng
                        Nhập</button>
                </form>
            </div>
            <!-- Logo Section -->
            <div class="col-md-5 text-center my-auto mx-5">
                <img src="img/G10 store - LOGO-.png" class="img-fluid" alt="Logo">
            </div>

        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>