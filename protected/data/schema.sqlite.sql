BEGIN;

CREATE TABLE deltas (
	id INTEGER NOT NULL PRIMARY KEY autoincrement,
	number INTEGER NOT NULL UNIQUE,
	tag VARCHAR(20) NOT NULL,
	description VARCHAR(255)
) ;

CREATE TABLE post_categories (
	id INTEGER NOT NULL PRIMARY KEY autoincrement,
	description VARCHAR(99) NOT NULL,
	slug VARCHAR(99) NOT NULL UNIQUE
) ;

CREATE TABLE posts (
	id INTEGER NOT NULL PRIMARY KEY autoincrement,
	published_date date,
	category_id INT,
	title VARCHAR(99) NOT NULL,
	slug VARCHAR(255) NOT NULL UNIQUE,
	body TEXT NOT NULL,
	published BOOLEAN NOT NULL DEFAULT 1,
	author_id INT
) ;

CREATE TABLE post_images (
	id INTEGER NOT NULL PRIMARY KEY autoincrement,
	post_id INT,
	url VARCHAR(255) NOT NULL
) ;

COMMIT;
