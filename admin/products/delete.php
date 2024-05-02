<?php
session_start();
ob_start();
$rootPath = '/Assignment_WebProgramming_HK232/admin';
require_once '../../config.php';

if (isset($_GET['id'])) {
    settype($_GET['id'], 'int');
    if ($_GET['id'] == 0) header('location: ../../404.php');
    $productId = $_GET['id'];
    $sqlFindImg = "SELECT image_url FROM product WHERE id = '$productId'";
    $ketQua = $link->query($sqlFindImg);
    // Kiểm tra id sản phẩm có trong database không
    if ($ketQua->num_rows > 0) {
        $ketQua = $ketQua->fetch_array();
        $images = $ketQua['image_url'];
        $sqlDelete = "DELETE FROM product WHERE id = '$productId'";
        $link->query($sqlDelete);
        unlink("../../public/img/products/" . $images);
        $link->close();
        setcookie('thongBao', 'Đã xóa sản phẩm thành công', time() + 5);
        header("location: index.php");
    } else {
        $link->close();
        header('location: ../../404.php');
    }
} else {
    $link->close();
    header('location: ../../404.php');
}
