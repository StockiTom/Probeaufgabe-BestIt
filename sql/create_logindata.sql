
/**Ein USER wird für die Datenbank angeglegt***/
drop USER if EXISTS user_onlineshop@localhost;
create USER user_onlineshop@localhost identified by '1234';
GRANT ALL PRIVILEGES ON onlineshop.* TO 'user_onlineshop'@'localhost';

/**Datenbank wird angelegt, wenn sie noch nicht existiert**/
drop DATABASE if EXISTS Onlineshop;
CREATE DATABASE IF NOT EXISTS Onlineshop;

use Onlineshop;


/**Tabelle LoginData wird angelegt (Hier werden die Logindaten befüllt)**/
drop TABLE if EXISTS LoginData;

CREATE TABLE IF NOT EXISTS LoginData (
    ID int not null auto_increment,
    UserName varchar(255) not null,
    FirstName varchar(255) not null,
    LastName varchar(255) not null,
    Email varchar(255) not null,
    Passwort varchar(255) not null,
    primary key(id)
);