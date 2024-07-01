-- Dohvatite sve zaposlenike i njihove plaće.
SELECT 
    e.id AS ID,
    e.employee_name AS 'Zaposlenik',
    s.amount AS 'Placa'
FROM employees e
JOIN salary s ON e.id = s.employee_id
ORDER BY e.id;

-- Dohvatite sve voditelje odjela i izračunajte prosjek njihovih plaća.
SELECT 
    COUNT(e.id) AS 'Zbroj voditelja',
    ROUND((SUM(s.amount) / COUNT(e.id)), 2) AS 'Prosjek placa voditelja'
FROM salary s
JOIN employees e ON e.id = s.employee_id
JOIN schedule sc ON e.id = sc.employee_id
WHERE sc.job_title_id = 2;

-- Kreirajte proceduru koja će računati prosjek plaća svih zaposlenika.
DELIMITER $$

CREATE PROCEDURE IF NOT EXISTS average_employee_salary()
BEGIN
    SELECT 
        COUNT(e.id) AS 'Zbroj zaposlenika',
        ROUND((SUM(s.amount) / COUNT(e.id)), 2) AS 'Prosjek place zaposlenika'
    FROM salary s
    JOIN employees e ON e.id = s.employee_id
    ORDER BY e.id;
END $$

DELIMITER;

CALL average_employee_salary();