-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5277
-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `games`;
USE `games`;

CREATE TABLE IF NOT EXISTS `controllers` (
  `controller_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`controller_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `born_on` date NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `games` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `controller_id` int(11) NOT NULL,
  `last_played` date DEFAULT NULL,
  `playtime` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`game_id`),
  KEY `FK_games_controllers` (`controller_id`),
  KEY `FK_games_users` (`user_id`),
  CONSTRAINT `FK_games_controllers` FOREIGN KEY (`controller_id`) REFERENCES `controllers` (`controller_id`),
  CONSTRAINT `FK_games_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users`
    (`user_id`, `username`, `password`, `display_name`, `born_on`)
VALUES
    (1, 'george', '$2y$10$fnncUQdY0MQJuqIgFk1BGOQKkxpSmPXTh0IX.av4TB5Tp9CzM2PS.', 'xXx_noScope', '2006-02-01'),
    (2, 'vince', '$2y$10$Q7A5iTVJBYnaY5X5gMwqOuoD5pGcDooG9c7k5PqM2.0L9LRSmDX7K', 'VVVVV', '1994-03-23'),
    (3, 'maria', '$2y$10$qh.HcdLKZwsnl4GglZ43h.Cti5Q9WGPYjnTbJu9Ad28e3jZWRFv5G', 'mar4eto13', '2003-05-15'),
    (4, 'alice', '$2y$10$S.idSMp0yZKUZEGqmSCRMeG33IZJrtWCYvzbQc.rYVKe8fmBdq3mm', 'Punisher', '1998-06-08');

INSERT INTO `controllers`
    (`controller_id`, `name`)
VALUES
    (1, 'Camera Controls'),
    (3, 'Gamepad'),
    (4, 'Gamepad with Gyro'),
    (2, 'High Precision Aim'),
    (5, 'Keyboard and Mouse');

INSERT INTO `games`
    (`game_id`, `title`, `publisher`, `release_date`, `controller_id`, `last_played`, `playtime`, `user_id`)
VALUES
    (2, 'Call of Duty: WWII', 'Activision', '2017-11-03', 3, NULL, 0, 1),
    (4, 'Battlefield 1', 'EA Games', '2016-10-21', 2, NULL, 0, 3),
    (5, 'Wolfenstein II: The New Colossus', 'Bethesda Softworks', '2017-10-27', 2, NULL, 0, 3),
    (6, 'Mario Kart 8', 'Nintendo', '2014-05-30', 4, NULL, 0, 3),
    (8, 'PlayerUnknown\'s Battlegrounds', 'Bluehole, Inc.', '2017-12-20', 5, NULL, 0, 2);

USE `games`;
select game_id AS id, title, publisher, release_date, controller_id, user_id from games ORDER BY release_date ASC, game_id ASC LIMIT 3;

select g.game_id AS id, g.title, g.publisher, c.name, u.username from games AS g
    INNER JOIN controllers AS c
    ON g.controller_id = c.controller_id
    INNER JOIN users AS u
    ON g.user_id = u.user_id
    ORDER BY g.game_id ASC;