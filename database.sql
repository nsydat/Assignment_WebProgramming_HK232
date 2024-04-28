DROP DATABASE IF EXISTS BKMilkTea;

CREATE DATABASE BKMilkTea;
USE BKMilkTea;

CREATE TABLE Account (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    password VARCHAR(255),
    role VARCHAR(50),
    email VARCHAR(255)
);

CREATE TABLE Users (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    sex VARCHAR(10),
    dateofbirth DATE,
    phone VARCHAR(20),
    address VARCHAR(255),
    FOREIGN KEY (id) REFERENCES Account(id)
);

CREATE TABLE Admin (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    sex VARCHAR(10),
    dateofbirth DATE,
    phone VARCHAR(20),
    address VARCHAR(255),
    FOREIGN KEY (id) REFERENCES Account(id)
);

CREATE TABLE Categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL DEFAULT ''
);

CREATE TABLE Product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL DEFAULT '',
    price FLOAT NOT NULL CHECK(price >= 0),
    description LONGTEXT DEFAULT '',
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES Categories(id)
);

CREATE TABLE Product_images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT,
    image_url VARCHAR(300),
    FOREIGN KEY (product_id) REFERENCES Product(id),
    CONSTRAINT fk_product_images_product_id
        FOREIGN KEY (product_id) REFERENCES Product(id) ON DELETE CASCADE
);

CREATE TABLE Orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    full_name VARCHAR(100) DEFAULT '',
    email VARCHAR(100) DEFAULT '',
    phone_number VARCHAR(20) NOT NULL,
    address VARCHAR(200) NOT NULL,
    note VARCHAR(100) DEFAULT '',
    order_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'processing', 'shipped', 'delivered', 'cancelled'),
    total_money FLOAT CHECK(total_money >= 0),
    shipping_method VARCHAR(100),
    shipping_address VARCHAR(200),
    shipping_date DATE,
    tracking_number VARCHAR(50),
    payment_method VARCHAR(100),
    active BOOL,
    FOREIGN KEY (user_id) REFERENCES Users(id)
);

CREATE TABLE Order_details (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    price FLOAT CHECK(price >= 0),
    number_of_products INT,
    total_money FLOAT,
    FOREIGN KEY (order_id) REFERENCES Orders(id),
    FOREIGN KEY (product_id) REFERENCES Product(id)
);

INSERT INTO Account (username, password, role, email)
VALUES ('admin', 'admin123', 'admin', 'admin@gmail.com');

SET @admin_account_id = LAST_INSERT_ID();

INSERT INTO Admin (id, name, sex, dateofbirth, phone, address)
VALUES (@admin_account_id, 'Admin', 'Male', '2003-02-10', '123456789', 'Ho Chi Minh University Of Technology');

INSERT INTO Categories (name) VALUES
('Trà sữa'), 
('Cà phê'), 
('Sinh tố - Nước ép'), 
('Topping');

INSERT INTO Product (name, price, description, category_id) VALUES
('Trà sữa Đài Loan', 35000, 'Trà sữa trân châu truyền thống', 1),
('Trà sữa Matcha', 40000, 'Trà sữa vị matcha ngon lành', 1),
('Trà sữa Ô long', 38000, 'Trà sữa vị ô long đặc trưng', 1),
('Trà sữa Hồng trà', 35000, 'Trà sữa vị hồng trà thơm ngon', 1),
('Trà sữa Socola', 45000, 'Trà sữa vị socola ngọt ngào', 1),
('Trà đào cam sả', 38000, 'Trà đào cam sả thanh mát', 1),
('Trà vải', 35000, 'Trà vải thơm ngon', 1),
('Trà đậu đỏ', 40000, 'Trà đậu đỏ ngọt lành', 1),
('Trà sữa Oolong', 38000, 'Trà sữa vị oolong đặc biệt', 1),
('Trà sữa Phúc bồn tử', 40000, 'Trà sữa vị phúc bồn tử lạ miệng', 1),
('Cà phê đá', 25000, 'Cà phê đen đá thơm ngon', 2),
('Cà phê sữa', 30000, 'Cà phê sữa thơm lừng', 2),
('Bạc xỉu', 35000, 'Bạc xỉu đậm vị', 2),
('Cappuccino', 40000, 'Cappuccino thơm béo', 2),
('Latte', 45000, 'Latte thơm ngon', 2),
('Cà phê mocha', 45000, 'Cà phê mocha ngon đậm đà', 2),
('Cà phê caramel', 42000, 'Cà phê caramel thơm ngon', 2),
('Cà phê đá xay', 28000, 'Cà phê đá xay thơm ngon', 2),
('Cà phê sữa đá xay', 32000, 'Cà phê sữa đá xay thơm béo', 2),
('Sinh tố bơ', 40000, 'Sinh tố bơ dẻo thơm béo', 3),
('Sinh tố dâu', 35000, 'Sinh tố dâu tươi ngon', 3),
('Sinh tố xoài', 38000, 'Sinh tố xoài thơm ngậy', 3),
('Nước ép cam', 30000, 'Nước ép cam tươi ngon', 3),
('Nước ép dứa', 35000, 'Nước ép dứa thơm ngon', 3),
('Sinh tố sầu riêng', 45000, 'Sinh tố sầu riêng thơm ngon', 3),
('Sinh tố bưởi', 40000, 'Sinh tố bưởi chua ngọt', 3),
('Nước ép nho', 35000, 'Nước ép nho tươi ngon', 3),
('Nước ép ổi', 38000, 'Nước ép ổi thơm ngậy', 3),
('Sinh tố việt quất', 42000, 'Sinh tố việt quất tươi ngon', 3),
('Sinh tố chuối', 38000, 'Sinh tố chuối thơm ngậy', 3),
('Nước ép cà rốt', 32000, 'Nước ép cà rốt tươi ngon', 3),
('Nước ép táo', 30000, 'Nước ép táo tươi ngọt thanh', 3),
('Trân châu đen', 10000, 'Trân châu đen mềm dẻo', 4),
('Trân châu trắng', 10000, 'Trân châu trắng mềm dẻo', 4),
('Đậu đỏ', 8000, 'Đậu đỏ ngọt thanh', 4),
('Thạch lô miệng', 8000, 'Thạch lô miệng mềm ngon', 4),
('Thạch rau câu', 8000, 'Thạch rau câu giòn ngon', 4),
('Trân châu sủi', 12000, 'Trân châu sủi bùng nổ vị', 4),
('Thạch băng tuyết', 10000, 'Thạch băng tuyết mát lạnh', 4),
('Thạch dừa', 10000, 'Thạch dừa thơm ngon', 4),
('Trân châu dừa', 12000, 'Trân châu dừa mềm dẻo', 4),
('Thạch pudding', 12000, 'Thạch pudding mềm ngọt', 4),
('Thạch cà phê', 10000, 'Thạch cà phê đậm vị', 4);

INSERT INTO Account (username, password, role, email)
VALUES ('john_doe', 'password123', 'user', 'john.doe@example.com');

INSERT INTO Users (id, name, sex, dateofbirth, phone, address)
VALUES (1, 'John Doe', 'Male', '1990-05-15', '0123456789', '123 Main Street');
