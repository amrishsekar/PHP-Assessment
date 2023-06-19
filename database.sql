CREATE DATABASE assessment;

USE assessment;

CREATE  TABLE items(
    id INT NOT  NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    product_img VARCHAR(255),
    price INT,
    brand VARCHAR(255),
    stock INT,
    sku VARCHAR(255),
    manufacture_date VARCHAR(255),
    created_at timestamp,
    updated_at timestamp
);
