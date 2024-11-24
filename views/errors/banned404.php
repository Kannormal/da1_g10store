<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banned</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Inter;
            text-align: center;
        }

        .btn-custom {
            width: 150px;
            height: 50px;
            border-radius: 20px;
            border: 2px solid #1F3A56;
            color: white;
        }

        .btn-custom:hover {
            background-color: #1F3A56;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <h1 class="display-4">Bạn đã bị ban</h1>
        <h2 class="h4 mb-4">Nhấn nút dưới đây để đăng xuất</h2>
        <input type="button" name="logout" value="Đăng xuất" class="btn btn-custom">
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>