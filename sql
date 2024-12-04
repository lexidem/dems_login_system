CREATE DATABASE user_management;

USE user_management;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    course VARCHAR(100) NOT NULL,
    program VARCHAR(100) NOT NULL
);
