CREATE DATABASE IF NOT EXISTS Onlineshop;

use Onlineshop;

CREATE TABLE IF NOT EXISTS LoginData (
    ID int not null auto_increment,
    UserName varchar(255),
    FirstName varchar(255),
    LastName varchar(255),
    Email varchar(255),
    Passwort varchar(255),
    primary key(id)
);