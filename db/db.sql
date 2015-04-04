create database tin;

create table user( 
    id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, 
    username VARCHAR(50) NOT NULL, 
    password CHAR(50) NOT NULL, 
    level CHAR(1) NOT NULL,
    PRIMARY KEY(id));
insert into user(username, password, level)
    values("admin", "12345", "2") 
          ("abc", "12345", "1");