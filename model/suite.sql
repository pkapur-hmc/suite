Drop DATABASE IF EXISTS SUITE;
CREATE DATABASE SUITE;
USE SUITE;

CREATE TABLE Student {
  stud_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(256) NOT NULL,
  year INT UNSIGNED NOT NULL,
  room INT UNSIGNED NOT NULL,
  roommate VARCHAR(256),
  FOREIGN KEY (room) REFERENCES Room(room_id),
  FOREIGN KEY (roommate) REFERENCES Student(stud_id),
  FOREIGN KEY (stud_id) REFERENCES Suite(suite_id)
}

CREATE TABLE Room {
  room_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  room_num INT UNSIGNED NOT NULL,
  residents INT UNSIGNED NOT NULL,
  suite INT UNSIGNED NOT NULL,
  FOREIGN KEY (residents) REFERENCES Student(stud_id),
  FOREIGN KEY (suite) REFERENCES Suite(suite_id)
}

CREATE TABLE Suite {
  suite_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(256) NOT NULL,
  suite_num INT UNSIGNED NOT NULL,
  rooms INT UNSIGNED NOT NULL,
  FOREIGN KEY (rooms) REFERENCES Room(room_id)
}

CREATE TABLE Status {
  status_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  status_temp VARCHAR(256) NOT NULL,
  FOREIGN KEY (status_id) REFERENCES Suite(student_id)
}

INSERT INTO Status {
  status_desc
}

VALUES {
  "Active"
  "Idle"
  "Do Not Disturb"
  "Eating"
  "Working"
  "Sleeping"
  "Exercising"
  -- "Custom"
  -- Want to make a custom variable with user input, but not sure how
}
