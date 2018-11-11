CREATE DATABASE `php-course`;

USE DATABASE `php-course`;

CREATE TABLE `students` (
  `first_name` varchar(256) NOT NULL,
  `last_name` varchar(256) NOT NULL,
  `student_number` int(11) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `home_address` varchar(256) DEFAULT NULL,
  `record_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_change_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` enum('Y','N') NOT NULL,
  `cover_letter` mediumtext,
  `notes` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `students` ADD UNIQUE INDEX `student_number` (`student_number`);

INSERT INTO students (`first_name`, `last_name`, `student_number`, `phone`, `home_address`, `is_active`, `cover_letter`, `notes`) VALUES ( 'tony', 'petkowa', '0526142', '000', 'Plovdiv, Grebnata', 'Y', 'azobi4amma4iboza', 'none'), ( 'petia', 'gospodinova', '080266', '032776606', 'Plovdiv, Marasha', 'N', '123123', 'ima ama gi zabravih kakwi sa');

UPDATE students SET phone = '123456' WHERE student_number = 526142;

DELETE FROM students WHERE student_number = 526142 AND cover_letter IS NULL;