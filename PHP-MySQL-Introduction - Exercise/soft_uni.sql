SELECT * FROM departments ORDER BY department_id ASC;

SELECT `name` FROM `departments`ORDER BY department_id;

SELECT `first_name`, `last_name`, `salary` FROM `employees` ORDER BY `employee_id` ASC;

SELECT first_name, middle_name, last_name FROM `employees` ORDER BY employee_id;

SELECT CONCAT(first_name, '.', last_name, '@', 'softuni.bg') AS 'full_email_address' FROM `employees` ORDER BY employee_id ASC 

SELECT DISTINCT(salary) FROM `employees` ORDER BY salary;

SELECT * FROM `employees` WHERE `job_title` = 'Sales Representative' ORDER BY employee_id;

SELECT `first_name`, `last_name`, `job_title` FROM `employees` WHERE `salary` BETWEEN 20000 AND 30000 ORDER BY employee_id;

SELECT CONCAT(`first_name`, ' ', `middle_name`, ' ', `last_name`) AS 'full_name' FROM `employees` WHERE `salary` IN (25000, 14000, 12500, 23600);

SELECT `first_name`, `last_name` FROM `employees` WHERE `manager_id` IS NULL;

SELECT `first_name`, `last_name`, `salary` FROM `employees` WHERE `salary` > 50000 ORDER BY `salary` DESC;

SELECT `first_name`, `last_name` FROM `employees` ORDER BY `salary` DESC LIMIT 5;

SELECT `first_name`, `last_name` FROM `employees` WHERE `department_id` <> 4;

SELECT * FROM `employees` ORDER BY `salary` DESC, `first_name` ASC, `last_name` DESC, `middle_name` ASC;

SELECT DISTINCT(`job_title`) FROM `employees` ORDER BY `salary` ASC;

SELECT `first_name`, `last_name`, `hire_date` FROM `employees` ORDER BY hire_date DESC LIMIT 7;

UPDATE employees SET salary = salary * 1.12 WHERE department_id IN(1,2,4,11);
SELECT salary FROM employees;

SELECT `peak_name` FROM `peaks` ORDER BY `peak_name` ASC;

SELECT `country_name`, `population` FROM `countries` WHERE continent_code = 'EU' ORDER BY `population` DESC, `country_name` ASC LIMIT 30;

SELECT country_name, country_code, IF(`currency_code` = 'EUR', 'Euro', 'Not Euro') as `currency` FROM countries ORDER BY country_name;