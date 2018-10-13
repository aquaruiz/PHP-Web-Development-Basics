SELECT COUNT(*) FROM `wizzard_deposits`;

SELECT MAX(`magic_wand_size`) AS longest_magic_wand FROM `wizzard_deposits`;

SELECT `deposit_group`, MAX(`magic_wand_size`) AS longest_magic_wand FROM `wizzard_deposits` GROUP BY `deposit_group` ORDER BY longest_magic_wand ASC;

SELECT `deposit_group` FROM `wizzard_deposits` GROUP BY `deposit_group` ORDER BY AVG(`magic_wand_size`) ASC LIMIT 1;

SELECT `deposit_group`, SUM(`deposit_amount`) AS total_sum FROM `wizzard_deposits` GROUP BY `deposit_group` ORDER BY total_sum;

SELECT COUNT(*) FROM `products` WHERE `category_id` = 2 AND `price` > 8;

SELECT `category_id`, ROUND(AVG(`price`), 2) AS 'Average Price', ROUND(MIN(`price`), 2) AS 'Cheapest Product', ROUND(MAX(`price`), 2) AS 'Most Expensive Product' FROM `products` GROUP BY `category_id`;

SELECT e.`employee_id`, e.`job_title`, a.address_id, a.address_text FROM `employees` AS e JOIN `addresses` AS a ON e.address_id = a.address_id ORDER BY e.address_id ASC LIMIT 5;

SELECT e.`employee_id`, e.`first_name`, e.`salary`, d.name FROM `employees` AS e JOIN departments AS d ON e.`department_id` = d.department_id WHERE e.salary > 15000 ORDER BY e.department_id DESC LIMIT 5;

SELECT e.`employee_id`, e.`first_name` FROM `employees` AS e LEFT JOIN employees_projects AS pr ON e.`employee_id` = pr.`employee_id` WHERE PR.project_id IS NULL ORDER BY e.`employee_id` DESC LIMIT 3;

SELECT e.`employee_id`, e.`first_name`, IF(YEAR(p.start_date) >= 2005, 'NULL', p.name) AS project_name FROM `employees` AS e JOIN employees_projects AS ep ON e.`employee_id` = ep.employee_id JOIN projects AS p ON ep.project_id = p.project_id WHERE e.employee_id = 24 ORDER BY P.name ASC;

SELECT e.`employee_id`, e.`first_name`, e.`manager_id`, m.`first_name` FROM `employees` AS e JOIN employees AS m ON e.manager_id = m.employee_id WHERE e.manager_id IN (3, 7) ORDER BY e.first_name;

SELECT e.`employee_id`, CONCAT(e.`first_name`, " ", e.`last_name`) AS employee_name, CONCAT(m.first_name, " ", m.last_name) AS manager_name, d.name FROM `employees` AS e JOIN employees AS m ON e.`manager_id` = m.`employee_id` JOIN departments AS d ON e.`department_id` = d.department_id ORDER BY e.employee_id LIMIT 5;