<?php
session_start();
ob_start();
$rootPath = '/Assignment_WebProgramming_HK232/admin/';

require_once '../../config.php';
if (isset($_POST['add'])) {
    if ($_FILES['images']['error'] > 0) {
        $tb = 'Lỗi: lỗi file hình - mã lỗi:' . $_FILES['images']['error'] . '<br>';
    } else {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);
        $price = mysqli_real_escape_string($conn, $_POST['price']);
        $priceSale = mysqli_real_escape_string($conn, $_POST['priceSale']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $categoryId = mysqli_real_escape_string($conn, $_POST['categoryId']);
        $images = mysqli_real_escape_string($conn, $_FILES['images']['name']);
        if ($name == '' || $quantity == '' || $description == '' || $price == '' || $priceSale == '' || $categoryId == '' || $images == '') {
            $tb .= 'Bạn chưa nhập đủ các trường' . '<br/>';
        } else {
            $sqlInsert = "INSERT INTO product (name, category_id, description, images, quantity, price, price_sale) 
                    VALUES ('$name', '$categoryId', '$description', '$images', '$quantity', '$price', '$priceSale')";
            $conn->query($sqlInsert);
            if (!file_exists("../../public/img/products/" . $images))
                move_uploaded_file($_FILES["images"]["tmp_name"], "../../public/img/products/" . $images);
            $conn->close();
            setcookie('thongBao', 'Đã thêm sản phẩm thành công', time() + 5);
            header("location: index.php");
        }
    }
}
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
                        Thêm mới sản phẩm
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2"></div>
                    <div class="col-xl-8 col-md-6 col-sm-12 shadow p-3 mb-5 bg-body rounded">
                        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
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
                                <label for="category" class="form-label">Thể loại</label>
                                <select name="categoryId" class="form-select" id="category">
                                </select>
                            </div>
                            <div class="d-flex">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Hình</label>
                                    <input class="form-control" name="images" type="file" id="formFile">
                                </div>
                            </div>
                            <input type="submit" class="btn btn-success w-100 mt-2" value="Cập nhật" name="add">
                        </form>
                    </div>
                    <div class="col-xl-2"></div>
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