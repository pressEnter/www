BEGIN;

CREATE TABLE users (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(40) NOT NULL,
    email VARCHAR(128) NOT NULL
);
--
--
CREATE TABLE deltas (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	number VARCHAR(10),
	tag VARCHAR(20) NOT NULL,
	description VARCHAR(255),
	UNIQUE delta_number_unique(number)
) ENGINE=INNODB;

CREATE TABLE post_categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	description VARCHAR(99) NOT NULL,
	slug VARCHAR(99) NOT NULL,
	UNIQUE post_category_description_unique(description),
	UNIQUE post_category_slug_unique(slug)
) ENGINE=INNODB;

CREATE TABLE posts (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	published_date DATETIME NOT NULL,
	title VARCHAR(99) NOT NULL,
	slug VARCHAR(255) NOT NULL,
	body TEXT NOT NULL,
	published BOOLEAN NOT NULL DEFAULT 1,
	author_id INT,
	UNIQUE posts_slug_unique(slug)
) ENGINE=INNODB;

CREATE TABLE posts_categories (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	post_id INT NOT NULL,
	category_id INT NOT NULL,
	UNIQUE post_category_unique(post_id, category_id),
	CONSTRAINT post_fk
	FOREIGN KEY(post_id)
	REFERENCES posts(id)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT,
	CONSTRAINT category_fk
	FOREIGN KEY(category_id)
	REFERENCES post_categories(id)
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
