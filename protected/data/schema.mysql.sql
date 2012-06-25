BEGIN;
/*
CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test5', 'pass5', 'test5@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test6', 'pass6', 'test6@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test7', 'pass7', 'test7@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test8', 'pass8', 'test8@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test9', 'pass9', 'test9@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test10', 'pass10', 'test10@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test11', 'pass11', 'test11@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test12', 'pass12', 'test12@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test13', 'pass13', 'test13@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test14', 'pass14', 'test14@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test15', 'pass15', 'test15@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test16', 'pass16', 'test16@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test17', 'pass17', 'test17@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test18', 'pass18', 'test18@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test19', 'pass19', 'test19@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test20', 'pass20', 'test20@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test21', 'pass21', 'test21@example.com');
*/

CREATE TABLE deltas (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	number INT NOT NULL,
	tag VARCHAR(20) NOT NULL,
	description VARCHAR(255),
	UNIQUE delta_number_unique(number)
) ENGINE=INNODB;

CREATE TABLE post_categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	description VARCHAR(99) NOT NULL,
	slug VARCHAR(99) NOT NULL,
	UNIQUE post_category_slug_unique(slug)
) ENGINE=INNODB;

CREATE TABLE posts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	published_date date,
	category_id INT,
	title VARCHAR(99) NOT NULL,
	slug VARCHAR(255) NOT NULL,
	body TEXT NOT NULL,
	published BOOLEAN NOT NULL DEFAULT 1,
	author_id INT,
	UNIQUE posts_slug_unique(slug),
	CONSTRAINT story_category_fk
	FOREIGN KEY (category_id)
	REFERENCES post_categories (id)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT
) ENGINE=INNODB;

CREATE TABLE post_images (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	post_id INT,
	url VARCHAR(255) NOT NULL,
	CONSTRAINT post_images_post_fk
	FOREIGN KEY (post_id)
	REFERENCES posts (id)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT
) ENGINE=INNODB;

COMMIT;
