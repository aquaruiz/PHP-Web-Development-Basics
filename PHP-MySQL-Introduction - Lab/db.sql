CREATE DATABASE `softuni`;

CREATE TABLE students(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	first_name VARCHAR(255) NOT NULL,
	second_name VARCHAR(255) NOT NULL,
	phone VARCHAR(40) NULL,
	record_date TIMESTAMP NOT NULL,
	last_change_date TIMESTAMP NOT NULL,
	is_active ENUM ('Y', 'N') NOT NULL
);

DROP TABLE `students`;

DROP DATABASE `softuni`;