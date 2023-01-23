use Onlineshop;


/**Hier wird die Tabelle Products angelegt wenn sie noch nicht existiert**/
drop table if EXISTS Products;

CREATE TABLE IF NOT EXISTS Products (
    ArticleNumber varchar(255),
    Name varchar(255) not null,
    Description varchar(255) not null,
    Price DECIMAL(10,2) not null,
    Image varchar(255) not null,
    primary key(ArticleNumber)
);