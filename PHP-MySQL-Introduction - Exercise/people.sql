CREATE TABLE people (
	`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` varchar(200) not null,
	`picture` blob,
	`height` float (2),
	`weight` float (2),
	`gender` enum('m', 'f') NOT NULL, 
	`birthdate` datetime NOT NULL,
	`biography` text (65635)
);

INSERT INTO people (`id`, `name`, `picture`, `height`, `weight`, `gender`, `birthdate`, `biography`)
VALUES 
('1', 'Maria', '/home/Pictures', '1.70', '65.50', 'f', '1983-05-09', 'She is new to this position and needs some training.' ),
('2', 'Ivan', '/home/Pictures', '1.90', '90.50', 'm', '1988-09-12', 'In this section of the tutorial, you have learned how to add data to your database, and also how to execute SQL statements using MySQL Workbench.' ),
('3', 'Eva', '/home/Pictures', '1.77', '77.30', 'f', '1955-10-30', 'In 1994, Schreiber made his first film, Mixed Nuts, playing a transvestite opposite Steve Martin. For the next several years, Schreiber established himself in independent films, including Denise Calls Up and Party Girl (1995), co-starring Parker Posey; Walking and Talking (1996), featuring Catherine Keener and Anne Heche;'),
('4', 'Gavin', '/home/Pictures', '1.79', '98.50', 'm', '1943-02-28', 'Gavin MacLeod was born as Allan George See on February 28, 1931 in Mount Kisco, New York. His father was part Chippewa Indian and owned a gas station, and his mother was a middle school dropout who would later work for Readers Digest' ),
('5', 'Hillary', '/home/Pictures', '1.60', '66.00', 'f', '1967-06-23', 'When Hillary Clinton was elected to the U.S. Senate in 2001, she became the first American first lady to ever win a public office seat. She later became the 67th U.S. secretary of state in 2009, serving until 2013. ' );

CREATE TABLE users(
	id BIGINT UNIQUE AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) UNIQUE  NOT NULL,
	password  VARCHAR(26) NOT NULL,
	profile_picture  BLOB,
	last_login_time DATE,
	is_deleted BOOL
);

INSERT INTO users(username, password, last_login_time, is_deleted)
VALUES 
	('Gogo', 'spojpe',  '2017-05-15', TRUE),
	('Bobo','epgojro', '2017-08-05', FALSE),
	('Ani',  'rpker', '2017-04-25', TRUE),
	('Sasho',  'rgpjrpe', '2017-05-06', TRUE),
	('Gery', 'pkptkh','2017-01-11', FALSE);

ALTER TABLE users
	DROP PRIMARY KEY,
	ADD CONSTRAINT pk_users PRIMARY KEY (`id`, `username`);