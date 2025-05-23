CREATE DATABASE ecommerce;
USE ecommerce;

CREATE TABLE customer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

CREATE TABLE shipping_method (
    id INT AUTO_INCREMENT PRIMARY KEY,
    method_name VARCHAR(50) NOT NULL
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_number VARCHAR(50) NOT NULL,
    customer_id INT NOT NULL,
    shipping_method_id INT NOT NULL,
    FOREIGN KEY (customer_id) REFERENCES customer(id),
    FOREIGN KEY (shipping_method_id) REFERENCES shipping_method(id)
);

INSERT INTO customer (name) VALUES ('Alice'), ('Bob');
INSERT INTO shipping_method (method_name) VALUES ('JNE'), ('SiCepat');
