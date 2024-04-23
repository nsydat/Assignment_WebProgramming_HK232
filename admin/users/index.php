<?php
// Kết nối đến cơ sở dữ liệu
require_once '../../config.php';

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #fff;">
            <a class="navbar-brand" href="homePage.php">
                <img src="../../img/logo.png" alt="" class="navigation__logo h-20">
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="homePage.php">Trang chủ</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>

            <div class="navigation__login" style="margin-left: 30px; margin-right: 100px;">
                <a class="btn btn-outline-secondary" href="./Login.php" role="button">Đăng nhập</a>
                <a class="btn btn-outline-secondary" href="./Register.php" role="button">Đăng ký</a>
            </div>
            <!-- </div> -->
        </nav>

        <h1> HomePage</h1>

        <footer class="grid grid-cols-4 grid-rows-4 gap-4 text-center text-white bg-yellow-400 rounded-lg ">
            <div class="col-start-1 col-span-4 ">
                <h4>BK Milk Tea</h4>
            </div>
            <div class="hover:underline dark:text-yellow-400">
                <a href="#" class="text-white">Về chúng tôi</a>
            </div>
            <div class="hover:underline dark:text-yellow-400">
                <a href="#" class="text-white">Đăng kí tài khoản</a>
            </div>
            <div class="hover:underline dark:text-yellow-400">
                <a href="#" class="text-white">Liên hệ với chúng tôi</a>
            </div>
            <div class="row-span-2">
                <a class="navbar-brand" href="../HomePage/homePage.html">
                    <img src="../../img/logo.png" alt="" class="navigation__logo h-16">
                </a>
            </div>
            <div class="hover:underline dark:text-yellow-400">
                <a href="#" class="text-white">Chính sách bảo mật</a>
            </div>
            <div class="hover:underline dark:text-yellow-400">
                <a href="#" class="text-white">Trung tâm hỗ trợ</a>
            </div>
            <div class="flex justify-center items-center">
                <a href="#" class="text-white mx-2"><i class="fa-brands fa-facebook fa-2xl"></i></a>
                <a href="#" class="text-white mx-2"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                <a href="#" class="text-white mx-2"><i class="fa-brands fa-twitter fa-2xl"></i></a>
            </div>
            <div class="col-span-4">Ho Chi Minh City</div>
        </footer>
    </div>
</body>

</html>