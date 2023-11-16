CREATE USER 'user'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON security_db.* TO 'user'@'localhost';
FLUSH PRIVILEGES;


