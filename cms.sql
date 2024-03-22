CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    update_at TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO `users` (`username`, `email`, `password`, `role`) VALUES ('admin', 'admin@address.com', '21232f297a57a5a743894a0e4a801fc3', 'admin');

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    title VARCHAR(255) NOT NULL,
    summary TEXT,
    content TEXT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);