CREATE DATABASE IF NOT EXISTS `softuni_bazar`;
USE `softuni_bazar`;

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`category_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `FK_items_categories` (`category_id`),
  KEY `FK_items_users` (`user_id`),
  CONSTRAINT `FK_items_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`),
  CONSTRAINT `FK_items_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories`
    (`category_id`, `name`)
VALUES
       (1, 'Electronics'),
       (2, 'Clothes'),
       (3, 'Other'),
       (4, 'Games');


INSERT INTO `users`
    (`user_id`, `username`, `password`, `full_name`, `location`, `phone`)
VALUES
       (1, 'george', '$2y$10$fnncUQdY0MQJuqIgFk1BGOQKkxpSmPXTh0IX.av4TB5Tp9CzM2PS.', 'xXx_noScope', 'Sofia', '088 777 66666'),
       (2, 'vince', '$2y$10$Q7A5iTVJBYnaY5X5gMwqOuoD5pGcDooG9c7k5PqM2.0L9LRSmDX7K', 'VVVVV', 'Plovdiv', '00000'),
       (3, 'maria', '$2y$10$qh.HcdLKZwsnl4GglZ43h.Cti5Q9WGPYjnTbJu9Ad28e3jZWRFv5G', 'mar4eto13', 'Varna', '541522'),
       (4, 'alice', '$2y$10$S.idSMp0yZKUZEGqmSCRMeG33IZJrtWCYvzbQc.rYVKe8fmBdq3mm', 'Punisher', 'Stara Zagora', '5555');
#
# INSERT INTO `games`
#     (`game_id`, `title`, `publisher`, `release_date`, `controller_id`, `last_played`, `playtime`, `user_id`)
# VALUES
#     (2, 'Call of Duty: WWII', 'Activision', '2017-11-03', 3, NULL, 0, 1),
#     (4, 'Battlefield 1', 'EA Games', '2016-10-21', 2, NULL, 0, 3),
#     (5, 'Wolfenstein II: The New Colossus', 'Bethesda Softworks', '2017-10-27', 2, NULL, 0, 3),
#     (6, 'Mario Kart 8', 'Nintendo', '2014-05-30', 4, NULL, 0, 3),
#     (8, 'PlayerUnknown\'s Battlegrounds', 'Bluehole, Inc.', '2017-12-20', 5, NULL, 0, 2);
#
# USE `games`;
# select game_id AS id, title, publisher, release_date, controller_id, user_id from games ORDER BY release_date ASC, game_id ASC LIMIT 3;
#
# select g.game_id AS id, g.title, g.publisher, c.name, u.username from games AS g
#     INNER JOIN controllers AS c
#     ON g.controller_id = c.controller_id
#     INNER JOIN users AS u
#     ON g.user_id = u.user_id
#     ORDER BY g.game_id ASC;