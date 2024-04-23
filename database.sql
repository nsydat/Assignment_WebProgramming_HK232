CREATE DATABASE BKMilkTea;
USE BKMilkTea;

-- Create Account table
CREATE TABLE Account (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    password VARCHAR(255),
    role VARCHAR(50),
    email VARCHAR(255)
);

-- Create User table
CREATE TABLE User (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    sex VARCHAR(10),
    dateofbirth DATE,
    phone VARCHAR(20),
    address VARCHAR(255),
    FOREIGN KEY (id) REFERENCES Account(id)
);

-- Create Admin table
CREATE TABLE Admin (
    id INT PRIMARY KEY,
    name VARCHAR(255),
    sex VARCHAR(10),
    dateofbirth DATE,
    phone VARCHAR(20),
    address VARCHAR(255),
    FOREIGN KEY (id) REFERENCES Account(id)
);

INSERT INTO Account (username, password, role, email)
VALUES ('john_doe', 'password123', 'user', 'john.doe@example.com');

INSERT INTO User (id, name, sex, dateofbirth, phone, address)
VALUES (1, 'John Doe', 'Male', '1990-05-15', '0123456789', '123 Main Street');
