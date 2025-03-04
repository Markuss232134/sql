
DROP DATABASE IF EXISTS blog_ipb23;


CREATE DATABASE blog_ipb23;


USE blog_ipb23;


CREATE TABLE categories (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(25)
);


INSERT INTO categories (category_name)
VALUES
("Sports"),
("Muzika"),
("Ediens");


CREATE TABLE posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(5200),
    category_id INT(255)
);


INSERT INTO posts (content)
VALUES
("yolo"),
("amen"),
("rip");


CREATE TABLE comments (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    autors VARCHAR(255),
    datet DATETIME,
    content VARCHAR (5200)
);


UPDATE posts
SET category_id = 1
WHERE id = 1;  

UPDATE posts
SET category_id = 2
WHERE id = 2;  )

UPDATE posts
SET category_id = 3
WHERE id = 3;  


SELECT * FROM posts;
SELECT * FROM categories;