CREATE VIEW
    salePerOrder AS
SELECT
    orderNumber,
    SUM(quantityOrdered * priceEach) total
FROM
    orderDetails
GROUP by
    orderNumber
ORDER BY
    total DESC;

SHOW FULL TABLES;

SHOW
CREATE VIEW
    salesorders;

/* if we update or insert through view we cant use theses.
Aggregate functions such as MIN, MAX, SUM, AVG, and COUNT.
DISTINCT
GROUP BY clause.
HAVING clause.
UNION or UNION ALL clause.
Left join or outer join.
Subquery in the SELECT clause or in the WHERE clause that refers to the table appeared in the FROM clause.
Reference non-updatable views in the FROM clause.
Use literal values.
Multiple references to any column of the base table. */
CREATE
OR REPLACE VIEW view_name AS select_statement
WITH
    CASCADED CHECK OPTION;

CREATE TABLE
    orders (
        order_id INT,
        customer_id INT,
        FOREIGN KEY (customer_id) REFERENCES customers (customer_id) ON DELETE CASCADE ON UPDATE CASCADE
    );

/* mysqldump -u [uname] -p db_name > db_backup.sql
mysql -u -p  source file.sql; */