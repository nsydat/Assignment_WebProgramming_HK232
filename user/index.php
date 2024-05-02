<?php
// Kết nối đến cơ sở dữ liệu
require_once '../config.php';
// Truy vấn cơ sở dữ liệu để lấy thông tin sản phẩm
$sql = "SELECT * FROM Product";
$result = mysqli_query($link, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        /* CSS để trang trí giao diện */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .product {
            float: left;
            width: 25%;
            padding: 10px;
            box-sizing: border-box;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
        .product h3 {
            margin-top: 0;
        }
        .product p {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Our Products</h1>
    </header>
    <div class="container">
        <?php
        // Lặp qua các hàng kết quả và hiển thị thông tin sản phẩm
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <!-- Sản phẩm -->
                <div class="product">
                    <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>">
                    <h3><?php echo $row['name']; ?></h3>
                    <p><?php echo $row['description']; ?></p>
                    <p>Price: $<?php echo $row['price']; ?></p>
                </div>
                <?php
            }
        } else {
            echo "No products found.";
        }
        ?>
    </div>
</body>
</html>

