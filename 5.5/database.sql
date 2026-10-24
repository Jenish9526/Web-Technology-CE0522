CREATE DATABASE IF NOT EXISTS employee_db;
USE employee_db;

CREATE TABLE employees (
   emp_id INT(11) NOT NULL AUTO_INCREMENT,
   emp_name VARCHAR(60) NOT NULL,
   email VARCHAR(80) NOT NULL,
   department VARCHAR(40) NOT NULL,
   designation VARCHAR(40) NOT NULL,
   salary DECIMAL(10,2) NOT NULL,
   joining_date DATE NOT NULL,
   PRIMARY KEY (emp_id)
);
