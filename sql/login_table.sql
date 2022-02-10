--Creating the database for employer
CREATE DATABASE jobPortal;

--Creating the table for login page
CREATE TABLE jobReg (jobName varchar(30), jobEmail varchar(20) primary key, jobPass varchar(10), confirmPass varchar(20));
CREATE TABLE empReg (compName varchar(30), compEmail varchar(30) primary key, compDesc varchar(100),compPass varchar(20), confirmPass varchar(20));

