CREATE TABLE `towns`(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(60) NOT NULL
);

CREATE TABLE `minions`(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    age INT NULL,
    town_id INT NOT NULL, 
);

USE `softuni`;
USE TABLE `towns`;

INSERT INTO `towns` (`id`, `name`) VALUES ('1', 'Sofia'), ('2', 'Plovdiv'), ('3', 'Varna');

USE TABLE `minions`;

INSERT INTO `minions` (`id`, `name`, `age`, `town_id`) VALUES ('1', 'Kevin', '22', '1');
INSERT INTO `minions` (`name`, `age`, `town_id`) VALUES ('Bob', '15', '3'), ('Steward', NULL, '2');

TRUNCATE TABLE `minions`;

DROP TABLE `minions`, `towns`;