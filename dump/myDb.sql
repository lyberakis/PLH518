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
('1', 'Vladimir', 'Lenin', 'vlenin', 'redarmy', 'vladlenin@gmail.ru');
