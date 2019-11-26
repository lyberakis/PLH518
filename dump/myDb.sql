CREATE DATABASE IF NOT EXISTS tuc;
use tuc;

CREATE TABLE IF NOT EXISTS teachers (
  id varchar(100) NOT NULL PRIMARY KEY,
  name varchar(50),
  surname varchar(50),
  username varchar(30),
  password varchar(30),
  email varchar(20)
);

create table IF NOT EXISTS students (
    id varchar(100) primary key,
    name varchar(50),
    surname varchar(50),
    fathername varchar(50),
    grade float,
    mobilenumber varchar(10),
    birthday date
);

INSERT INTO teachers (id, name, surname, username, password, email) VALUES
('1', 'Giannis', 'Papadakis', 'gpapadakis', 'ninechars', 'gpapadakis@gmail.gr');

INSERT INTO students (id, name, surname, fathername, grade, mobilenumber, birthday) VALUES
('2015030183', 'Vasilis', 'Lymperakis', 'Dimitris', '6.5', '1234567890', '1997-11-07');

INSERT INTO students (id, name, surname, fathername, grade, mobilenumber, birthday) VALUES
('2020030183', 'Giorgos', 'Papadopoulos', 'Giannis', '7.5', '1243567890', '2002-01-27');
