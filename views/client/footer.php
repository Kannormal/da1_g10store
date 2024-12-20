<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <!-- Thêm liên kết Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <footer class="bg-light py-5">
        <div class="container">
            <!-- Top section -->
            <div class="row mb-4">
                <!-- Total hotline section -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="lists-c">
                        <h2 class="fs-4">Tổng Đài Hỗ Trợ</h2>
                        <a href="#" class="d-block text-dark text-decoration-none">
                            <h3 class="fs-5">Gọi mua: 1900 232 460 (8:00 - 21:30)</h3>
                        </a>
                        <a href="#" class="d-block text-dark text-decoration-none">
                            <h3 class="fs-5">Khiếu nại: 1800.1062 (8:00 - 21:30)</h3>
                        </a>
                        <a href="#" class="d-block text-dark text-decoration-none">
                            <h3 class="fs-5">Bảo hành: 1900 232 464 (8:00 - 21:00)</h3>
                        </a>
                    </div>
                </div>

                <!-- About Us section -->
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="lists-c">
                        <h2 class="fs-4">Về chúng tôi</h2>
                        <a href="#" class="d-block text-dark text-decoration-none">
                            <h3 class="fs-5">Tuyển dụng</h3>
                        </a>
                        <a href="#" class="d-block text-dark text-decoration-none">
                            <h3 class="fs-5">Góp ý (Khiếu nại)</h3>
                        </a>
                        <a href="#" class="d-block text-dark text-decoration-none">
                            <h3 class="fs-5">Liên hệ</h3>
                        </a>
                    </div>
                </div>

                <!-- Social media section -->
                <div class="col-md-4">
                    <div class="middle text-center">
                        <img src="img/snapedit_1731504798294.jpeg" class="img-fluid mb-4" alt="Social Media">
                        <h2 class="fs-2">Mạng xã hội</h2>
                        <div class="d-flex justify-content-center">
                            <a href="#" class="mx-2">
                                <img src="img/Discord New Black.png" alt="Discord" width="50" height="50">
                            </a>
                            <a href="#" class="mx-2">
                                <img src="img/2175193.png" alt="Facebook" width="50" height="50">
                            </a>
                            <a href="#" class="mx-2">
                                <img src="img/pinterest.png" alt="Pinterest" width="50" height="50">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <!-- Bottom section -->
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="mb-0">© Copyright 2024 Co., Ltd. All rights reserved.</h3>
                <div>
                    <a href="#" class="text-dark text-decoration-none mx-3">Chính sách</a>
                    <a href="#" class="text-dark text-decoration-none">Dịch vụ khác</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Thêm liên kết Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        //lấy button
        search = document.getElementById('search');
        //Viết sự kiện click cho nút search
        search.addEventListener('click', function() {
            keyword = document.getElementById('keyword').value;
            window.location = "<?= ROOT_URL  ?>" + "?ctl=search&keyword=" + keyword;

        })

        search.addEventListener('keydown', function() {
            if (e.key == 'Enter') {

            }
        })

        function searchProduct() {
            window.location = "<? ROOT_URL ?>" + "?ctl=search&keyword=" + $keyword;

        }
    </script>
</body>

</html>