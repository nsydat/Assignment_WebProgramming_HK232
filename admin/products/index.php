<?php
require_once '../../config.php';

$sql = "SELECT * FROM Users";
$users = mysqli_query($link, $sql);

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@^2.0/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../include/header-footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
</head>

<body>
    <div class="container-self">
        <?php
        include '../include/header.php'
        ?>
        <div class="body my-5 container-fluid">
            <div class="row mb-2 text-center">
                <div class="h3 text-primary">Danh sách sản phẩm</div>
            </div>
            <div class="row mb-2">
                <div class="col-xl-3 col-md-4 col-sm-12">
                    <a href="./add.php" class="ms-5 btn btn-primary">Thêm sản phẩm</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <table class="table">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">#id</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Giá</th>
                                            <th scope="col">Mô tả</th>
                                            <th scope="col">Hàng tồn</th>
                                            <th scope="col">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Sản phẩm A</td>
                                            <td>1000000</td>
                                            <td>Trà sữa trân châu truyền thống</td>
                                            <td>10</td>
                                            <td>
                                                <a href="./update.php?id=1" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                                <a href="./delete.php?id=1" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Sản phẩm B</td>
                                            <td>2000000</td>
                                            <td>Trà đào cam sả thanh mát</td>
                                            <td>20</td>
                                            <td>
                                                <a href="./update.php?id=2" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                                <a href="./delete.php?id=2" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Pagination -->
                            <nav class="mt-3">
                                <ul class="pagination pagination-lg d-flex justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" data-remote="true">&lsaquo; Prev</a>
                                    </li>
                                    <li class="page-item active">
                                        <span rel="prev" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" data-remote="true">1</span>
                                    </li>
                                    <li class="page-item">
                                        <a data-remote="true" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-dark" data-remote="true">Next &rsaquo;</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php
        include '../include/footer.php'
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>