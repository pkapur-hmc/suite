Drop DATABASE IF EXISTS SUITE;
CREATE DATABASE SUITE;
USE SUITE;

CREATE TABLE Student (
  stud_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(256) NOT NULL,
  email VARCHAR(320) NOT NULL,
  password VARCHAR(256) NOT NULL, 
  status VARCHAR(256) NOT NULL,
  year INT UNSIGNED NOT NULL,
  room INT UNSIGNED NOT NULL,
  suite INT UNSIGNED NOT NULL,
  FOREIGN KEY (status) REFERENCES Status(status_id),
  FOREIGN KEY (suite) REFERENCES Suite(suite_id)
);

CREATE TABLE Suite (
  suite_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(256) NOT NULL,
  suite_num INT UNSIGNED NOT NULL,
  student VARCHAR(256) NOT NULL,
  FOREIGN KEY (student) REFERENCES Student(stud_id)
);

CREATE TABLE Status (
  status_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  FOREIGN KEY (status_id) REFERENCES StatusList(userStatus_id)
);

CREATE TABLE StatusList (
  userStatus_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(256) NOT NULL
);

INSERT INTO StatusList VALUES (01, "Inside suite (free)");
INSERT INTO StatusList VALUES (02, "Inside suite (busy)");
INSERT INTO StatusList VALUES (03, "Outside suite (free)");
INSERT INTO StatusList VALUES (04, "Outside suite (busy)");
