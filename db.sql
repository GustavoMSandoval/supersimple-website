CREATE TABLE clients (
    client_id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone INT(11),
    address VARCHAR(100),
    PRIMARY KEY (client_id)
);
CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT,
    price DECIMAL(10, 2),
    stock INT
);