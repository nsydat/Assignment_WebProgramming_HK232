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
            <div class="container">
                <div class="row">
                    <div class="col text-center h4 text-primary">
                        Cập nhật sản phẩm
                    </div>
                </div>
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-8 shadow p-3 mb-5 bg-body rounded">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" name="name" value="" id="name" placeholder="Nhập tên sản phẩm">
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Hàng tồn</label>
                                <input type="number" class="form-control" name="quantity" value="" id="quantity" placeholder="Nhập số lượng hàng còn lại">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Giá</label>
                                <input type="number" class="form-control" name="price" value="" id="price" placeholder="Nhập giá bán của sản phẩm">
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Mô tả</label>
                                <textarea id="desc" name="description" class="form-control mt-2" id="" rows="6" placeholder="Nhập mô tả cho sản phẩm"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Thể loại</label>
                                <select name="categoryId" class="form-select" id="">
                                    <option value="1">Thể loại 1</option>
                                    <option value="2">Thể loại 2</option>
                                    <option value="3">Thể loại 3</option>
                                </select>
                            </div>
                            <div>
                                <img src="https://images.unsplash.com/photo-1620360289473-bfafadc16c57?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" width="200px" alt="">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Hình</label>
                                    <input class="form-control" name="images" type="file" id="formFile" multiple="multiple">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary w-100 mt-2" value="Cập nhật" name="update">
                        </form>
                    </div>
                    <div class="col-2"></div>
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