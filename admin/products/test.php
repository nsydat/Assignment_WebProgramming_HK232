<?php
require_once '../../config.php';

// Kiểm tra kết nối
if ($link->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $link->connect_error);
}

// Truy vấn SQL để lấy thông tin sản phẩm và category
$sqlShowProducts = "SELECT p.id, p.name, p.price, p.description, c.name AS category_name 
                    FROM product p 
                    INNER JOIN categories c ON p.category_id = c.id";
$products = $link->query($sqlShowProducts);

// Kiểm tra nếu có kết quả trả về
if ($products->num_rows > 0) {
    // Hiển thị dữ liệu trong bảng
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Description</th><th>Category</th></tr>";
    while ($row = $products->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['category_name'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Không có sản phẩm nào.";
}

// Đóng kết nối
$link->close();
