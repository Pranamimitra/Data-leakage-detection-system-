-- Create a new database
CREATE DATABASE IF NOT EXISTS data_leakage_detection;

-- Use the created database
USE data_leakage_detection;

-- Create a table to store user information
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    address VARCHAR(100),
    email VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);
