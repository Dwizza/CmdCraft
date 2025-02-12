CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    pass VARCHAR(255) NOT NULL,
    role ENUM('admin', 'client') DEFAULT 'client',
    is_active ENUM('active', 'desactive') DEFAULT 'active'
);

CREATE TABLE orders(
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    total_price FLOAT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE products(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price FLOAT NOT NULL,
    quantity INT NOT NULL
);

CREATE TABLE order_details(
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    order_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (product_id) REFERENCES products(id),
    FOREIGN KEY (order_id) REFERENCES orders(id)
);