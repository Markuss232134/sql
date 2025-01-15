CREATE DATABASE blog_ipb23;
USE blog_ipb23;

CREATE TABLE posts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	content VARCHAR(5200)
);

INSERT INTO posts 
(content)
VALUES 
("pirmias posts"),
("otrais posts"),
("tresais posts") ;

SELECT * FROM posts;