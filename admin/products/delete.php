<?php
session_start();
ob_start();
$rootPath = '/Assignment_WebProgramming_HK232/admin';
require_once '../../config.php';

if (isset($_GET['id'])) {
    settype($_GET['id'], 'int');
    if ($_GET['id'] == 0) {
        echo "ID sản phẩm không hợp lệ.";
        exit;
    }
    $productId = $_GET['id'];
    $sqlDelete = "DELETE FROM Product WHERE id = '$productId'";
    $result = $link->query($sqlDelete);
    // TODO: Test later
    if ($link->affected_rows > 0) {
        unlink("../../img/products/" . $productId . ".jpg");
        $link->close();
        setcookie('thongBao', 'Đã xóa sản phẩm thành công', time() + 5);
        header("location: index.php");
    } else {
        $link->close();
        echo "Không tìm thấy sản phẩm trong cơ sở dữ liệu.";
    }
} else {
    $link->close();
    echo "Không có ID sản phẩm được cung cấp.";
}
