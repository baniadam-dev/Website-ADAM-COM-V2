CREATE DATABASE adamcom_db;

USE adamcom_db;

CREATE TABLE tabel_adamcom (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL
);
