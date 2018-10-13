SELECT `department_id`, COUNT(*) FROM `employees` GROUP BY department_id;

SELECT `department_id`, ROUND(AVG(`salary`), 2) AS 'Average Salary' FROM `employees` GROUP BY department_id ORDER BY department_id;

SELECT e.first_name, e.last_name,t.name AS town, a.address_text FROM employees AS e JOIN addresses AS a ON e.address_id = a.address_id JOIN towns AS t ON a.town_id = t.town_id ORDER BY e.first_name, e.last_name LIMIT 5;

SELECT e.employee_id, e.first_name, e.last_name, d.name AS 'department_name' FROM employees AS e JOIN departments AS d ON e.department_id = d.department_id WHERE d.name = 'Sales' ORDER BY e.employee_id DESC;

SELECT e.first_name, e.last_name, e.hire_date, d.name FROM employees e JOIN departments d ON e.department_id = d.department_id
WHERE date(e.hire_date) > '1999-01-01' AND d.name IN ('Sales', 'Finance') ORDER BY e.hire_date ASC;

SELECT COUNT(c.country_code) as country_count FROM countries as c LEFT JOIN mountains_countries AS m_c ON c.country_code = m_c.country_code WHERE m_c.mountain_id IS NULL;

SELECT AVG(`salary`) AS AV FROM `employees` GROUP BY `department_id` ORDER BY AV LIMIT 1;