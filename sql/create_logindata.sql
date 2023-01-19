drop DATABASE if EXISTS Onlineshop;

CREATE DATABASE IF NOT EXISTS Onlineshop;

use Onlineshop;

CREATE TABLE IF NOT EXISTS LoginData (
    ID int not null auto_increment,
    UserName varchar(255) not null,
    FirstName varchar(255) not null,
    LastName varchar(255) not null,
    Email varchar(255) not null,
    Passwort varchar(255) not null,
    primary key(id)
);