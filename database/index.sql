CREATE TABLE t(
   c1 INT PRIMARY KEY,
   c2 INT NOT NULL,
   c3 INT NOT NULL,
   c4 VARCHAR(10),
   INDEX (c2,c3) 
);

CREATE INDEX index_name 
ON table_name (column_list)

EXPLAIN SELECT 
    employeeNumber, 
    lastName, 
    firstName
FROM
    employees
WHERE
    jobTitle = 'Sales Rep';



DROP INDEX name ON leads;
DROP INDEX `PRIMARY` ON table_name;

SHOW INDEX IN table_name 
FROM database_name;